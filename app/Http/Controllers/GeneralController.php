<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category; // cần thêm dòng này nếu chưa có
use App\Product;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    protected $categories;

    public function __construct()
    {
        // 1. Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active' ,1)->get();
        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active' , 1)->get();
        // 3. lấy dữ liệu tin tức
        $articles = Article::where('is_active', 1)
                            ->orderBy('id', 'desc')
                            ->take(4)
                            ->get();

        $this->categories = $categories;

        view()->share(['categories' => $categories, 'banners' => $banners, 'articles' => $articles]);
    }

    public function notfound()
    {
        return view('shop.notfound');
    }
}
