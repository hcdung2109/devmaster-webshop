<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $categories;

    public function __construct()
    {
        // 1. Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active' ,1)->get();
        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active' , 1)->get();

        $this->categories = $categories;

        view()->share(['categories' => $categories, 'banners' => $banners]);
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

        // step 2 : lấy list sản phẩm theo thể loại
        $products = Product::where(['is_active' => 1, 'is_hot' => 0, 'category_id' => $category->id ])
                             ->orderBy('id', 'desc')->paginate(10);

        return view('shop.products-by-category',[
            'category' => $category,
            'products' => $products
        ]);
    }

    public function getProduct($category , $slug , $id)
    {
        // step 1 : lấy chi tiết thể loại
        $category = Category::where(['slug' => $category])->first();
        // get chi tiet sp
        $product = Product::find($id);

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
}
