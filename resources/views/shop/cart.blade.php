@extends('shop.layouts.main')

@section('content')
    <style>#cart-summary tbody td.cart-product img { border: 0px }</style>
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Giỏ Hàng</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPPING-CART SUMMARY START -->
                    <h2 class="page-title">Thông tin giỏ hàng</h2>
                    <!-- SHOPPING-CART SUMMARY END -->
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="my-cart" class="table-responsive">
                        @include('shop.components.cart', [])
                    </div>
                    <!-- CART TABLE_BLOCK END -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- CONTACT-US-FORM START -->
                    <div class="contact-us-form">
                        <div class="contact-form-center">
                            <h3 class="contact-subheading">Thông Tin Cá Nhân</h3>
                            <!-- CONTACT-FORM START -->
                            <form class="contact-form" id="contactForm" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="form-group primary-form-group">
                                            <label>Subject Heading</label>
                                            <div class="con-form-select">
                                                <select id="conForm" name="conform">
                                                    <option value="">Customar Service</option>
                                                    <option value="">Webmaster</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Email address</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="contactemail" value="">
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Order reference</label>
                                            <div class="con-form-select">
                                                <select id="orderRef" name="orderref">
                                                    <option value="">Bootexpert</option>
                                                    <option value="">Ohter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <div class="file-uploader">
                                                <label>Attach File</label>
                                                <input type="file" class="form-control" name="fileUpload">
                                                <span class="filename">No file selected</span>
                                                <span class="action">Choose File</span>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Send <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Message</label>
                                                <textarea class="contact-text" name="ContactMessage"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- CONTACT-FORM END -->
                        </div>
                    </div>
                    <!-- CONTACT-US-FORM END -->
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- RETURNE-CONTINUE-SHOP START -->
                    <div class="returne-continue-shop">
                        <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
                        <a href="checkout-signin.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!-- RETURNE-CONTINUE-SHOP END -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
            //$('.remove-to-cart').click(function () {
                var product_id = $(this).attr('data-id');

                $.ajax({
                    url: '/dat-hang/xoa-sp-gio-hang/'+product_id,
                    type: 'get',
                    data: {
                        id : product_id
                    }, // dữ liệu truyền sang nếu có
                    dataType: "HTML", // kiểu dữ liệu trả về
                    success: function (response) {

                        $('#my-cart').html(response);
                    },
                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }
                });
            });

            // cập nhật số lượng giỏ hàng
            //$('.item-qty').change(function () {
            $(document).on("change", '.item-qty', function () {
                var product_id = $(this).attr('data-id');
                var qty = $(this).val();

                $.ajax({
                    url: '/dat-hang/cap-nhat-gio-hang',
                    type: 'get',
                    data: {
                        id : product_id,
                        qty : qty
                    }, // dữ liệu truyền sang nếu có
                    dataType: "HTML", // kiểu dữ liệu trả về
                    success: function (response) {
                        $('#my-cart').html(response);
                    },
                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }
                });
            });
        })
    </script>
@endsection