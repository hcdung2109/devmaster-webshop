@extends('shop.layouts.main')

@section('content')
    <style>
        .list-view-content .product-datails p { border-bottom: 0px}
    </style>
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Tin tức</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-gategory-product">
                        <div class="row">
                            <ul class="gategory-product">
                                @foreach($articles as $article)
                                    <li class="cat-product-list">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="{{ route('shop.article.detail', ['slug' => $article->slug , 'id' => $article->id]) }}">
                                                    <img src="{{ asset($article->image) }}" alt="product-image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="list-view-content">
                                            <div class="single-product-item">
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <a href="{{ route('shop.article.detail', ['slug' => $article->slug , 'id' => $article->id]) }}">
                                                            {{ $article->title }}
                                                        </a>
                                                        <div class="review-box">
                                                            <span>{{ $article->created_at }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-datails">
                                                        {!! $article->summary !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
