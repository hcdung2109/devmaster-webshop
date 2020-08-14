@extends('shop.layouts.main')

@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>{{ $category->name }}</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- PRODUCT-LEFT-SIDEBAR START -->
                    <div class="product-left-sidebar">

                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Thương hiệu</span>
                            <ul>
                                @foreach($child_categories as $child)
                                    <li>
                                        <label class="cheker">
                                            <input type="checkbox" name="category_id" value="{{ $child->id }}"/>
                                            <span></span>
                                        </label>
                                        <a href="#">{{ $child->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR CATEGORIES END -->
                        <!-- SINGLE SIDEBAR AVAILABILITY START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Mức giá</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="availability"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Tất cả</a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="price" value="1-2000000"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Dưới 2 triệu
                                    </a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="price" value="2000000-4000000"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Từ 2 - 4 triệu
                                    </a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="price" value="4000000-7000000"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Từ 4 - 7 triệu
                                    </a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="price" value="7000000-13000000"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Từ 7 - 13 triệu
                                    </a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="price" value="20000000"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Trên 13 triệu
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="right-all-product">
                        <!-- PRODUCT-CATEGORY-HEADER END -->
                        <div class="product-category-title">
                            <!-- PRODUCT-CATEGORY-TITLE START -->
                            <h1>
                                <span class="cat-name">{{ $category->name }}</span>
                                <div class="shoort-by" style="float: right">
                                    <div class="short-select-option">
                                        <select name="sortby" id="productShort">
                                            <option value="">-- Sắp sếp ---</option>
                                            <option value="">Nổi bật</option>
                                            <option value="">Bán chạy nhất</option>
                                            <option value="">Gía thấp đến cao</option>
                                            <option value="">Gía cao đến thấp</option>
                                        </select>
                                    </div>
                                </div>
                            </h1>
                            <!-- PRODUCT-CATEGORY-TITLE END -->
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT START -->
                    <div class="all-gategory-product">
                        <div class="row">
                            <ul class="gategory-product">
                                @foreach($products as $product)
                                    <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="{{ route('shop.product', ['slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}" >
                                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{ route('shop.product', ['slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                                                <div class="price-box">
                                                    <span class="price">{{ number_format($product->sale,0,",",".") }} đ<span class="p-price">{{ number_format($product->price,0,",",".") }} đ</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT END -->
                    <!-- PRODUCT-SHOOTING-RESULT START -->
                    <div class="product-shooting-result product-shooting-result-border" style="border: 0px">
                        <style> </style>
                        {{ $products->links() }}
                    </div>
                    <!-- PRODUCT-SHOOTING-RESULT END -->
                </div>
            </div>
        </div>
    </section>
@endsection
