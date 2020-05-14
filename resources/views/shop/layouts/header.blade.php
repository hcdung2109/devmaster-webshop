<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- HEADER-LEFT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-left-menu">
                    <div class="welcome-info">
                        Bom <span>Store</span>
                    </div>
                </div>
            </div>
            <!-- HEADER-LEFT-MENU END -->
            <!-- HEADER-RIGHT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline">
                            <li><a href="{{ route('contact.index') }}">Liên Hệ</a></li>
                            <li><a href="{{ route('shop.cart') }}">Giỏ Hàng</a></li>
                            <li><a href="">Đăng Nhập</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="/"><img src="shop/img/logo2.png" alt="bstore logo" /></a>
                </div>

                <div class="categorys-product-search">
                    <form action="{{ route('shop.search') }}" method="GET" class="search-form-cat">
                        <div class="search-product form-group">
                            <input style="width: 100%" type="text" class="form-control search-form" name="tu-khoa" placeholder="Nhập từ khóa tìm kiếm" />
                            <button class="search-button" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- CATEGORYS-PRODUCT-SEARCH END -->
            </div>
        </div>
    </div>
</section>
<!-- HEADER-MIDDLE END -->
