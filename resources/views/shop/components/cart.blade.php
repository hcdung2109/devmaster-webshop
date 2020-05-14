@if(session('cart'))
    @php
        $cart = session('cart');
        $products = $cart->products;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
    @endphp
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
                    <small>SKU : demo_5</small>
                    <small><a href="#">Size : M, Color : Blue</a></small>
                    <button>Cập nhật</button>
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
        <tr class="cart-total-price">
            <td class="cart_voucher" colspan="2" rowspan="4"></td>
            <td class="text-right" colspan="2">Tổng tiền</td>
            <td id="total_product" class="price" colspan="1"
                style="color: red; font-weight: bold">{{ number_format($totalPrice ,0,",",".") }} đ
            </td>
        </tr>
        </tfoot>
        <!-- TABLE FOOTER END -->
    </table>
@else
    <h3>khong co sản pham nào trong giỏ hàng</h3>
@endif