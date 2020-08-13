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

                </div>
            </div>
        </div>
    </section>
@endsection
