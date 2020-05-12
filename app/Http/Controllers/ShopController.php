<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cart;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Product;
use Session;
use Illuminate\Http\Request;

class ShopController extends GeneralController
{

    public function __construct()
    {
        parent::__construct();
    }

    // trang chủ
    public function index()
    {
        $categories = $this->categories;

        // 3. Lấy danh sách phẩm theo thể loại
        $list = []; // chứa danh sách sản phẩm  theo thể loại

        foreach($categories as $key => $category) {
            if($category->parent_id == 0) { // check danh mục cha
                $ids = [$category->id]; // $ids = array($category->id);

                foreach($categories as $child) {
                    if ($child->parent_id == $category->id) {
                        $ids[] = $child->id; // thêm phần tử vào mảng
                    }
                } // ids = [1,7,8,9,..]

                $list[$key]['category'] = $category;
                $list[$key]['products'] = $category->products()->where(['is_active' => 1, 'is_hot' => 0])
                                                                ->whereIn('category_id' , $ids)
                                                                ->limit(10)->orderBy('id', 'desc')
                                                                ->get();
            }
        }

        return view('shop.home',[
            'list' => $list
        ]);
    }

    // Get san phan theo the loai
    public function getProductsByCategory($slug)
    {
        // step 1 : lấy chi tiết thể loại
        $category = Category::where(['slug' => $slug])->first();

        if ($category) {
            // step 2 : lấy list sản phẩm theo thể loại
            $products = Product::where(['is_active' => 1, 'is_hot' => 0, 'category_id' => $category->id ])
                ->orderBy('id', 'desc')->paginate(10);

            return view('shop.products-by-category',[
                'category' => $category,
                'products' => $products
            ]);
        } else {
            return $this->notfound();
        }
    }

    public function getProduct($category , $slug , $id)
    {
        // step 1 : lấy chi tiết thể loại
        $category = Category::where(['slug' => $category])->first();

        if (!$category) {
            return $this->notfound();
        }
        // get chi tiet sp
        $product = Product::find($id);
        if (!$product) {
            return $this->notfound();
        }


        // step 2 : lấy list SP liên quan
        $relatedProducts = Product::where([
                                ['is_active' , '=', 1],
                                ['category_id', '=' , $category->id ],
                                ['id', '<>' , $id]
                            ])->orderBy('id', 'desc')->paginate(10);

        return view('shop.product',[
            'category' => $category,
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return $this->notfound();
        }

        $_cart = session('cart') ? session('cart') : '';
        // Khởi tạo giỏ hàng
        $cart = new Cart($_cart);
        // Thêm sản phẩm vào giỏ
        $cart->add($product, $id);

        $request->session()->put('cart', $cart);

        return redirect()->route('shop.cart');
    }

    public function getCart(Request $request)
    {
        $cart = $request->session()->get('cart');

        return view('shop.cart',[
            'products' => $cart->products,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'tu-khoa' => 'required'
        ]);

        $keyword = str_slug($request->input('tu-khoa'));


        $products = Product::where([
            ['is_active' , '=', 1],
            ['slug', 'like' , '%'.$keyword.'%']
        ])->get();

        dd($products);

        return view('shop.search',[
            'products' => $products
        ]);
    }
}
