@extends('shop.layouts.main')

@section('content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                        <span> <i class="fa fa-caret-right"> </i> </span>
                        <a href="shop-gird.html">{{ $category->name }}</a>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                            <div class="single-product-view">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="thumbnail_1">
                                        <div class="single-product-image">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                                            <a class="fancybox" href="img/product/sale/1.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_2">
                                        <div class="single-product-image">
                                            <img src="img/product/sale/3.jpg" alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href="img/product/sale/3.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_3">
                                        <div class="single-product-image">
                                            <img src="img/product/sale/9.jpg" alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href="img/product/sale/9.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_4">
                                        <div class="single-product-image">
                                            <img src="img/product/sale/13.jpg" alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href="img/product/sale/13.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_5">
                                        <div class="single-product-image">
                                            <img src="img/product/sale/7.jpg" alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href="img/product/sale/7.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_6">
                                        <div class="single-product-image">
                                            <img src="img/product/sale/12.jpg" alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href="img/product/sale/12.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-product">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs select-product-tab bxslider">
                                    <li class="active">
                                        <a href="#thumbnail_1" data-toggle="tab"><img src="img/product/sidebar_product/1.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_2" data-toggle="tab"><img src="img/product/sidebar_product/2.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_3" data-toggle="tab"><img src="img/product/sidebar_product/3.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_4" data-toggle="tab"><img src="img/product/sidebar_product/4.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_5" data-toggle="tab"><img src="img/product/sidebar_product/5.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_6" data-toggle="tab"><img src="img/product/sidebar_product/6.jpg" alt="pro-thumbnail" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                            <div class="single-product-descirption">
                                <h2>{{ $product->name }}</h2>
                                <div class="single-product-condition">
                                    <p>Tình trạng:
                                        @if ($product->stock > 0)
                                            <span style="color: green">CÒN HÀNG</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-product-price">
                                    <h2>{{ number_format($product->sale,0,",",".") }} <span style="text-transform: lowercase">đ</span></h2>
                                </div>
                                <div class="single-product-desc">
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                </div>
                                <div class="single-product-info">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="fa fa-print"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="single-product-quantity">
                                    <p class="small-title">Số lượng</p>
                                    <div class="cart-quantity">
                                        <div class="cart-plus-minus-button single-qty-btn">
                                            <input class="cart-plus-minus sing-pro-qty" type="text" name="qty" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-size">
                                    <p class="small-title">Size </p>
                                    <select name="product-size" id="product-size">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="single-product-color">
                                    <p class="small-title">Color </p>
                                    <a href="#"><span></span></a>
                                    <a class="color-blue" href="#"><span></span></a>
                                </div>
                                <div class="single-product-add-cart">
                                    <a class="add-cart-text" title="Add to cart" href="{{ route('shop.cart.add-to-cart', ['id' => $product->id]) }}">Mua Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-PRODUCT-DESCRIPTION END -->
                    <!-- SINGLE-PRODUCT INFO TAB START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-more-info-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs more-info-tab">
                                    <li class="active"><a href="#moreinfo" data-toggle="tab">Tóm Tắt</a></li>
                                    <li><a href="#datasheet" data-toggle="tab">Chi tiết</a></li>
                                    <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="moreinfo">
                                        <div class="tab-description">
                                            {!! $product->summary !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="datasheet">
                                        <div class="deta-sheet">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="review">
                                        <div class="row tab-review-row">
                                            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                                <div class="tab-rating-box">
                                                    <span>Grade</span>
                                                    <div class="rating-box">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-empty"></i>
                                                    </div>
                                                    <div class="review-author-info">
                                                        <strong>write A REVIEW</strong>
                                                        <span>06/22/2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                                <div class="write-your-review">
                                                    <p><strong>write A REVIEW</strong></p>
                                                    <p>write A REVIEW</p>
                                                    <span class="usefull-comment">Was this comment useful to you? <span>Yes</span><span>No</span></span>
                                                    <a href="#">Report abuse </a>
                                                </div>
                                            </div>
                                            <a href="#" class="write-review-btn">Write your review!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-PRODUCT INFO TAB END -->
                    <!-- RELATED-PRODUCTS-AREA START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="left-title-area">
                                <h2 class="left-title">Sản Phẩm Liên Quan</h2>
                            </div>
                        </div>
                        <div class="related-product-area featured-products-area">
                            <div class="col-sm-12">
                                <div class=" row">
                                    <!-- RELATED-CAROUSEL START -->
                                    <div class="related-product">
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        @foreach($relatedProducts as $item)
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="{{ asset($item->image) }}" alt="{{ $item->name }}" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="#">{{ $product->name }}</a>
                                                    <div class="price-box">
                                                        <span class="price">{{ number_format($product->sale,0,",",".") }} đ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- RELATED-CAROUSEL END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RELATED-PRODUCTS-AREA END -->
                </div>
                <!-- RIGHT SIDE BAR START -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar">
                        <h2 class="left-title">Viewed products</h2>
                        <ul>
                            <li>
                                <a href="#"><img src="img/product/sidebar_product/2.jpg" alt="" /></a>
                                <div class="r-sidebar-pro-content">
                                    <h5><a href="#">Faded Short ...</a></h5>
                                    <p>Faded short sleeves t-shirt with high...</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img src="img/product/sidebar_product/4.jpg" alt="" /></a>
                                <div class="r-sidebar-pro-content">
                                    <h5><a href="#">Printed Chif ..</a></h5>
                                    <p>Printed chiffon knee length dress...</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img src="img/product/sidebar_product/6.jpg" alt="" /></a>
                                <div class="r-sidebar-pro-content">
                                    <h5><a href="#">Printed Sum ...</a></h5>
                                    <p>Long printed dress with thin...</p>
                                </div>
                            </li>
                            <li>
                                <a href="#"><img src="img/product/sidebar_product/1.jpg" alt="" /></a>
                                <div class="r-sidebar-pro-content">
                                    <h5><a href="#">Printed Dress </a></h5>
                                    <p>100% cotton double printed dress....</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDE BAR END -->
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar clearfix">
                        <h2 class="left-title">Tags </h2>
                        <div class="category-tag">
                            <a href="#">fashion</a>
                            <a href="#">handbags</a>
                            <a href="#">women</a>
                            <a href="#">men</a>
                            <a href="#">kids</a>
                            <a href="#">New</a>
                            <a href="#">Accessories</a>
                            <a href="#">clothing</a>
                            <a href="#">New</a>
                        </div>
                    </div>
                    <!-- SINGLE SIDE BAR END -->
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar">
                        <div class="slider-right zoom-img">
                            <a href="#"><img class="img-responsive" src="img/product/cms11.jpg" alt="sidebar left" /></a>
                        </div>
                    </div>
                </div>
                <!-- SINGLE SIDE BAR END -->
            </div>
        </div>
    </section>
@endsection
