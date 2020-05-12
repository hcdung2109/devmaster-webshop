<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function search(Request $request)
    {
        $keyword = $request->input('tu-khoa');
        $slug = str_slug($keyword);
        $totalResult = 0;

        $products = [];

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND (name like '%?%' OR slug like '%?%' OR summary like '%?%')";
        //$results = DB::select($sql, [
        //    $keyword, $slug , $keyword
        //]);

        $products =  Product::where([
                ['name', 'like', '%'.$keyword.'%'],
                ['is_active' , '=', 1]
            ])->orWhere([
                ['slug', 'like', '%'.str_slug($keyword).'%'],
                ['is_active' , '=', 1]
            ])->orWhere([
                ['summary', 'like', '%'.$keyword.'%'],
                ['is_active' , '=', 1]
            ])->paginate(20);

        $totalResult =  $products->total();

        return view('shop.search',[
            'products' => $products,
            'totalResult' => $totalResult,
            'keyword' => $keyword
        ]);
    }
}
