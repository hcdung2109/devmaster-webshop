<style>
    h2.left-title {border: 0px}
    .single-product-item .product-image {
        margin-bottom: 15px;
    }
    .price-box span.price {
        display: inline-block !important;
        vertical-align: middle !important;
        overflow: hidden !important;
        font-size: 14px !important;
        color: #e10c00 !important;
        line-height: 15px !important;
    }
    .p-price {
        display: inline-block;
        vertical-align: middle;
        font-size: 12px;
        text-decoration: line-through;
        margin-left: 5px;
        color: #222;
    }
    .main-slider-area, .left-category-menu, .main-slider-area img {
        height: 320px !important;
    }

    .left-category-menu ul li {
        display: block;
        width: 100%;
        height: 80px;
    }
    .list_news img{
        width: 100px;
        height: 60px;
        margin: 0px auto;
        display: block;
        overflow: hidden;
        float: left;
        margin-right: 10px;
    }
    .list_news .article-title {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
</style>
<!-- HEADER-BOTTOM-AREA START -->
<section class="header-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <!-- MAIN-SLIDER-AREA START -->
                <div class="main-slider-area">
                    <div class="slider-area">
                        <div id="wrapper">
                            <!-- Kiểm tra nếu có dữ liệu banners thì mới hiển thị -->
                            @if(!empty($banners))
                                <div class="slider-wrapper">
                                    <div id="mainSlider" class="nivoSlider">
                                        @foreach($banners as $banner)
                                            <a href="#"><img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}"/></a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- MAIN-SLIDER-AREA END -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!-- LEFT-CATEGORY-MENU START -->
                <div class="left-category-menu">
                    <ul class="list_news">
                        @if(!empty($articles))
                            @foreach($articles as $article)
                                <li>
                                    <a href="{{ route('shop.article.detail', ['slug' => $article->slug , 'id' => $article->id]) }}">
                                        <img src="{{asset($article->image)}}" width="100" height="50">
                                        <span class="title">{{ $article->title }}</span>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- LEFT-CATEGORY-MENU END -->
            </div>
        </div>
    </div>
</section>
