@extends('shop.layouts.main')

@section('content')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section-full-column">
        <div class="container">

            @foreach ($list as $item)
            <div class="row">
                <div class="col-xs-12">
                    <!-- FEATURED-PRODUCTS-AREA START -->
                    <div class="featured-products-area">
                        <div class="left-title-area">
                            <h2 class="left-title">{{ $item['category']->name }}</h2>
                        </div>
                        <div class="row">
                            <!-- FEARTURED-CAROUSEL START -->
                            <div class="feartured-carousel">
                                <!-- SINGLE ITEM START -->
                                @foreach($item['products'] as $product)
                                <div class="item">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('shop.product', ['slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}" >
                                                <img width="180" height="180" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('shop.product', ['slug' => $product->slug , 'id' => $product->id]) }}">{{ $product->name }}</a>
                                            <div class="price-box">
                                                <span class="price">{{ number_format($product->sale,0,",",".") }}đ<span class="p-price">{{ number_format($product->price,0,",",".") }}đ</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SINGLE-PRODUCT-ITEM END -->
                                </div>
                                @endforeach
                            </div>
                            <!-- FEARTURED-CAROUSEL END -->
                        </div>
                    </div>
                    <!-- FEATURED-PRODUCTS-AREA END -->
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
