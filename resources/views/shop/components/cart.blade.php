@if(session('cart'))
    @php
        $cart = session('cart');
        $products = $cart->products;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        $discount = $cart->discount;
        $coupon = $cart->coupon;
        $payment = $totalPrice - $discount;
    @endphp
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-lg-6"></div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <form action="{{ route('shop.cart.check-coupon') }}" method="get">
                    <div class="input-group">
                        <input value="{{ $coupon }}" name="coupon_code" style="width: 200px; float: right" type="text" class="form-control" placeholder="Nhập mã khuyến mại">
                        <span class="input-group-btn">
                            <button style="color: white; background: #e3007b; border-color: #e3007b;" class="btn btn-default" type="submit">Áp dụng</button>
                        </span>
                    </div>
                </form>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-bordered" id="cart-summary">
                <!-- TABLE HEADER START -->
                <thead>
                <tr>
                    <th class="cart-product">Ảnh</th>
                    <th class="cart-description text-center">Sản phẩm</th>
                    <th class="cart-unit text-center">Giá</th>
                    <th class="cart_quantity text-center">Số lượng</th>
                    <th class="cart-total text-right">Thành tiền</th>
                    <th class="cart-delete text-center">&nbsp;</th>
                </tr>
                </thead>
                <!-- TABLE HEADER END -->
                <!-- TABLE BODY START -->
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="cart-product">
                            <a href="#"><img src="{{ asset($product['item']->image) }}" alt="{{ $product['item']->name }}"></a>
                        </td>
                        <td class="cart-description">
                            <p class="product-name"><a href="#">{{ $product['item']->name }}</a></p>
                            <small>SKU : {{ $product['item']->sku }}</small>
                        </td>
                        <td class="cart-unit">
                            <ul class="price text-right">
                                <li class="price-percent-reduction small">
                                    &nbsp; {{ number_format($product['item']->sale ,0,",",".") }} đ
                                </li>
                                @if($product['item']->sale < $product['item']->price)
                                    <li class="old-price">{{ number_format($product['item']->price ,0,",",".") }} đ</li>
                                @endif
                            </ul>
                        </td>
                        <td class="cart_quantity text-center">
                            <div class="">
                                <input min="1" class="cart-plus-minus item-qty" data-id="{{ $product['item']->id }}" type="number" name="qty" value="{{ $product['qty'] }}">
                            </div>
                        </td>
                        <td class="cart-total">
                    <span class="price">{{ number_format($product['qty'] * $product['item']->sale ,0,",",".") }}
                        đ</span>
                        </td>
                        <td class="cart-delete text-center">
                            <a data-id="{{ $product['item']->id }}" href="javascript:void(0)"
                               class="cart_quantity_delete remove-to-cart" title="Xóa sản phẩm"><i
                                        class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                <!-- SINGLE CART_ITEM END -->
                </tbody>
                <!-- TABLE BODY END -->
                <!-- TABLE FOOTER START -->
                <tfoot>
                <tr>
                    <td class="text-right" colspan="4">Tạm tính</td>
                    <td class="price" colspan="2">
                        <span>{{ number_format($totalPrice ,0,",",".") }} đ</span>
                    </td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4">Giảm giá</td>
                    <td class="price" colspan="2"><span>- {{ number_format($discount ,0,",",".") }} đ</span></td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4">Thanh toán</td>
                    <td class="price" colspan="2"><span style="color: red">{{ number_format($payment ,0,",",".") }} đ</span></td>
                </tr>
                </tfoot>
                <!-- TABLE FOOTER END -->
            </table>
        </div>
    </div>
@else
    <style>
        .buyother {
            display: block;
            overflow: hidden;
            background: #fff;
            line-height: 40px;
            text-align: center;
            margin: 15px auto;
            width: 300px;
            font-size: 14px;
            color: #288ad6;
            font-weight: 600;
            text-transform: uppercase;
            border: 1px solid #288ad6;
            border-radius: 4px;
        }
    </style>
    <h3 class="text-center"><i class="fa fa-opencart"></i>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>
    <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Về trang chủ</a>
@endif