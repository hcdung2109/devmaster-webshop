<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cart;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Coupon;
use App\Order;
use App\OrderDetail;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends GeneralController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('shop.cart');
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return $this->notfound();
        }
        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart') ? session('cart') : '';
        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);
        // Thêm sản phẩm vào giỏ
        $cart->add($product, $id);
        // Lưu thông tin vào session
        $request->session()->put('cart', $cart);

        return redirect()->route('shop.cart');
    }

    // Xóa sp khỏi giỏ hàng
    public function removeToCart(Request $request, $id)
    {
        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart') ? session('cart') : '';
        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);
        $cart->remove($id);

        if (count($cart->products) > 0) {
            // Lưu thông tin vào session
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }

        return view('shop.components.cart');
    }

    // Cập nhật lại giỏ hàng
    public function updateToCart(Request $request)
    {
        // check nhập số lượng không đúng định dạng
        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric',
        ]);

        // check số lượng lỗi
        if ($validator->fails()) {
            return response()->json([
                'status'  => false ,
                'data' => $validator
            ]);
        }

        $id = $request->input('id');
        $qty = $request->input('qty');

        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart');
        if (!$_cart) {
            return response()->json([
                'status'  => false ,
                'data' => 'Bạn chưa thêm sản phẩm nào trong giỏ hàng'
            ]);
        }

        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);
        $cart->store($id, $qty);

        if (count($cart->products) > 0) {
            // Lưu thông tin vào session
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }

        return response()->json([
            'status'  => true,
            'data' => view('shop.components.cart')->render()
        ]);

    }

    public function checkCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect()->route('shop.cart')->withErrors('msg', 'Mã giảm giá không tồn tại');
        }

        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart');
        if (!$_cart) {
            return response()->json([
                'status'  => false ,
                'data' => 'Bạn chưa thêm sản phẩm nào trong giỏ hàng'
            ]);
        }

        $discount = 0;

        // check default tính theo giá
        if ($coupon->type = 1) {
            $discount = $coupon->value;
        } else {
            // tính theo %
            $discount = ($coupon->percent * $_cart->totalPrice) * 100;
        }

        $_cart->discount = $discount;

        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);

        // Lưu thông tin vào session
        $request->session()->put('cart', $cart);
    }

    // Hủy đơn hàng
    public function destroy(Request $request)
    {
        // remove session
        $request->session()->forget('cart');

        return redirect('/');
    }

    // Thanh toán
    public function checkout()
    {
        return view('shop.checkout');
    }

    public function postCheckout(Request $request)
    {
        if (!session('cart')) {
            return redirect('/');
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart');

        // Lưu vào bảng đơn đặt hàng - orders
        $order = new Order();
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order->total = $_cart->totalPrice;
        $order->order_status_id = 1; // 1 = mới
        $order->save();
        // Lưu vào bảng chỉ tiết đơn đặt hàng

        foreach ($_cart->products as $product) {
            //dd($product);
            $_detail = new OrderDetail();
            $_detail->order_id = $order->id;
            $_detail->product_id = $product['item']->id;
            $_detail->qty = $product['qty'];
            $_detail->price = $product['price'];
            $_detail->save();
        }

        // Xóa thông tin giỏ hàng
        $request->session()->forget('cart');

        return redirect()->route('shop.cart.checkout')->with('msg', 'Bạn đã đặt hàng thành công');
    }
}
