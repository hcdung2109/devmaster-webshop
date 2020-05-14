<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cart;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $id = $request->input('id');
        $qty = $request->input('qty');

        // Kiểm tra tồn tại giỏ hàng cũ
        $_cart = session('cart') ? session('cart') : '';
        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);
        $cart->update($id, $qty);

        if (count($cart->products) > 0) {
            // Lưu thông tin vào session
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }

        return view('shop.components.cart');

    }

    public function postCheckout(Request $request)
    {
        if (!session('cart')) {
            return redirect('/');
        }

        $order = new Order();
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order->payment_id = $request->input('payment_id');
        $order->save();

        // Lưu vào bảng chỉ tiết đơn đặt hàng


        // Xóa thông tin giỏ hàng
        $request->session()->forget('cart');

        return redirect()->route('shop.cart')->with('msg', 'Bạn đã đặt hàng thành công');
    }

    public function checkout()
    {

    }
}
