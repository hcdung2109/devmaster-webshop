@extends('shop.layouts.main')

@section('content')
    <style>
        #cart-summary tbody td.cart-product img { border: 0px }
        .returne-continue-shop .procedtocheckout {
            background: #ff4f4f none repeat scroll 0 0;
            border-radius: 4px;
            color: #fff;
            display: block;
            float: right;
            font-size: 20px;
            line-height: 50px;
            padding: 0 16px;
            transition: all 500ms ease 0s;
        }
        .contact-form label {
            display: block;
            margin: 14px 0;
        }
    </style>
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
                <!-- Nhập mã khuyến mại -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-lg-6"></div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                        <!--<form action="{{ route('shop.cart.check-coupon') }}" method="get">
                            <div class="input-group">
                                <input name="coupon_code" style="width: 200px; float: right" type="text" class="form-control" placeholder="Nhập mã khuyến mại">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Áp dụng</button>
                                </span>
                            </div>
                        </form>
                        -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div>
                <!-- Danh sách sản phẩm -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="my-cart" class="table-responsive">
                        @include('shop.components.cart', [])
                    </div>
                </div>
                @if(session('cart'))
                <!-- Thông Tin Cá Nhân -->
                <form method="post" action="{{ route('shop.cart.checkout') }}">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- CONTACT-US-FORM START -->
                    <div class="contact-us-form">
                        <div class="contact-form-center">
                            <h3 class="contact-subheading">Thông Tin Cá Nhân</h3>
                            <!-- CONTACT-FORM START -->
                            <div class="contact-form" id="contactForm">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="form-group primary-form-group">
                                            <label>Họ và tên</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="name" value="">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="email" value="">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group primary-form-group">
                                            <label>Số ĐT</label>
                                            <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Địa chỉ nhận hàng</label>
                                                <textarea style="height: auto" class="contact-text" name="address"></textarea>
                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="type-of-text">
                                            <div class="form-group primary-form-group">
                                                <label>Ghi chú</label>
                                                <textarea style="height: 104px" class="contact-text" name="note"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT-FORM END -->
                        </div>
                    </div>
                    <!-- CONTACT-US-FORM END -->
                </div>
                    <div style="margin-top: 20px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- RETURNE-CONTINUE-SHOP START -->
                        <div class="returne-continue-shop">
                            <a href="{{ route('shop.cart.destroy') }}" class="continueshoping"><i class="fa fa-chevron-left"></i>Hủy đặt hàng</a>
                            <button type="submit" class="procedtocheckout">Gửi đơn hàng<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
                var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?");
                if (result) {
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
                }
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
                    dataType: "json", // kiểu dữ liệu trả về
                    success: function (response) {
                        console.log(response);
                        // success
                        if (response.status) {
                            $('#my-cart').html(response.data);
                        }
                    },
                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }
                });
            });
        })
    </script>
@endsection