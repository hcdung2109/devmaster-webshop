<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category; // cần thêm dòng này nếu chưa có
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // trang chủ
    public function index()
    {
        // 1. Lấy dữ liệu - Danh mục sản phẩm
        $categories = Category::where('is_active' ,1)->get();

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where('is_active' , 1)->get();

        return view('shop.home',[
            // truyền dữ liệu sang view
            'categories' => $categories,
            'banners' => $banners
        ]);
    }
}
