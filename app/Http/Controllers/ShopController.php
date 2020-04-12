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
            // truyền dữ liệu sang view
            'categories' => $categories,
            'banners' => $banners,
            'list' => $list
        ]);
    }
}
