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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="right-all-product">
                        <!-- PRODUCT-CATEGORY-HEADER END -->
                        <div class="product-category-title">
                            <!-- PRODUCT-CATEGORY-TITLE START -->
                            <h1>
                                <span class="cat-name">Women</span>
                                <span class="count-product">There are 13 products.</span>
                            </h1>
                            <!-- PRODUCT-CATEGORY-TITLE END -->
                        </div>
                        <div class="product-shooting-area">
                            <div class="product-shooting-bar">
                                <!-- SHOORT-BY START -->
                                <div class="shoort-by">
                                    <label for="productShort">Sort by</label>
                                    <div class="short-select-option">
                                        <select name="sortby" id="productShort">
                                            <option value="">--</option>
                                            <option value="">Price: Lowest first</option>
                                            <option value="">Price: Highest first</option>
                                            <option value="">Product Name: A to Z</option>
                                            <option value="">Product Name: Z to A</option>
                                            <option value="">In stock</option>
                                            <option value="">Reference: Lowest first</option>
                                            <option value="">Reference: Highest first</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- SHOORT-BY END -->
                                <!-- SHOW-PAGE START -->
                                <div class="show-page">
                                    <label for="perPage">Show</label>
                                    <div class="s-page-select-option">
                                        <select name="show" id="perPage">
                                            <option value="">11</option>
                                            <option value="">12</option>
                                        </select>
                                    </div>
                                    <span>per page</span>
                                </div>
                                <!-- SHOW-PAGE END -->
                                <!-- VIEW-SYSTEAM START -->
                                <div class="view-systeam">
                                    <label for="perPage">View:</label>
                                    <ul>
                                        <li class="active"><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br>Grid</li>
                                        <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br>List</li>
                                    </ul>
                                </div>
                                <!-- VIEW-SYSTEAM END -->
                            </div>
                            <!-- PRODUCT-SHOOTING-RESULT START -->
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT START -->
                    <div class="all-gategory-product">
                        <div class="row">
                            <ul class="gategory-product">
                                <!-- SINGLE ITEM START -->
                                <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="single-product.html"><img src="img/product/sale/3.jpg" alt="product-image"></a>
                                            <a href="single-product.html" class="new-mark-box">new</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review(s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                            <div class="price-box">
                                                <span class="price">$16.51</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
