<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Cart;
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

        $list = []; // chứa danh sách sản phẩm  theo danh mục

        foreach($this->categories as $key => $parent) {
            if($parent->parent_id == 0) { // check danh mục cha
                $ids = [] ; // tạo chứa các id của danh cha + danh mục con trực thuộc

                $ids[] = $parent->id; // id danh mục cha

                foreach($this->categories as $child) {
                    if ($child->parent_id == $parent->id) {
                        $ids[] = $child->id; // thêm phần tử vào mảng
                    }
                } // ids = [1,7,8,9,..]

                $list[$key]['category'] = $parent; // điện thoại, tablet

                // SELECT * FROM `products` WHERE is_active = 1 AND is_hot = 0 AND category_id IN (1,7,9,11) ORDER BY id DESC LIMIT 10
                $list[$key]['products'] = Product::where(['is_active' => 1, 'is_hot' => 0])
                                                    ->whereIn('category_id' , $ids)
                                                    ->limit(10)
                                                    ->orderBy('id', 'desc')
                                                    ->get();


            }
        }

        return view('shop.home',[
            'list' => $list
        ]);
    }

    // lấy san phan theo danh mục
    public function getProductsByCategory($slug)
    {
        // step 1 : lấy chi tiết thể loại
        $cate = Category::where(['slug' => $slug])->first();

        if ($cate) {
            // step 1.1 Check danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = []; // lưu toàn id của danh mục cha + id - danh mục con

            $ids[] = $cate->id;

            foreach ($this->categories as $child) {
                if ($child->parent_id == $cate->id) {
                    $ids[] = $child->id; // thêm id của danh mục con vào mảng ids
                }
            }

            // step 2 : lấy list sản phẩm theo thể loại
            $products = Product::where(['is_active' => 1])
                                ->whereIn('category_id' , $ids)
                                ->limit(10)
                                ->orderBy('id', 'desc')
                                ->get();

            return view('shop.products-by-category',[
                'category' => $cate,
                'products' => $products
            ]);

        } else {
            return $this->notfound();
        }
    }

    // Chi tiet san pham
    public function getProduct($slug , $id)
    {
        // get chi tiet sp
        $product = Product::find($id);
        if (!$product) {
            return $this->notfound();
        }

        $category = Category::find($product->category_id);

        $tags = Category::where([
                                    ['parent_id' , '<>', 0],
                                    ['is_active' , '=', 1]
                                ])->get();


        // step 2 : lấy list 10 SP liên quan
        $relatedProducts = Product::where([
                                ['is_active' , '=', 1],
                                ['category_id', '=' , $product->category_id ],
                                ['id', '<>' , $product->$id]
                            ])->orderBy('id', 'desc')
                            ->take(10)
                            ->get();

        return view('shop.product',[
            'category' => $category,
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'tags' => $tags
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

        $products = Product::where([
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active', '=', 1]
        ])->orWhere([
            ['slug', 'like', '%' . str_slug($keyword) . '%'],
            ['is_active', '=', 1]
        ])->orWhere([
            ['summary', 'like', '%' . $keyword . '%'],
            ['is_active', '=', 1]
        ])->paginate(20);

        $totalResult = $products->total();

        return view('shop.search', [
            'products' => $products,
            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''
        ]);
    }

    // Danh sach bai viet
    public function getListArticles()
    {
        $articles = Article::latest()->paginate(15);

        return view('shop.list-articles',[
            'articles' => $articles
        ]);
    }

    // Chi tiet bai viet
    public function getArticle($slug , $id)
    {
        $article = Article::find($id);

        if (!$article) {
            return $this->notfound();
        }

        return view('shop.article',[
            'article' => $article
        ]);
    }
}
