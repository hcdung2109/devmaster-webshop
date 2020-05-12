<style>
    .main-menu-area, .shopping-cart a.shop-link, .shopping-cart-out { height: 45px; }
    .mainmenu nav ul li a { line-height: 45px; }
    .shipping-cart-overly { top: 45px }
</style>
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                <div class="shopping-cart-out pull-right">
                    @if(session('cart'))
                        <div class="shopping-cart">
                            <a class="shop-link" href="cart.html" title="View my shopping cart">
                                <i class="fa fa-shopping-cart cart-icon" style="margin-right: 0px"></i>
                                <span class="" style="margin: 5px">( 2 )</span>
                            </a>
                            <div class="shipping-cart-overly">
                                <div class="shipping-item">
                                    <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                    <div class="shipping-item-image">
                                        <a href="#"><img src="shop/img/shopping-image.jpg" alt="shopping image" /></a>
                                    </div>
                                    <div class="shipping-item-text">
                                        <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
                                        <span class="pro-quality"><a href="#">S,Black</a></span>
                                        <p>$22.95</p>
                                    </div>
                                </div>
                                <div class="shipping-item">
                                    <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                    <div class="shipping-item-image">
                                        <a href="#"><img src="shop/img/shopping-image2.jpg" alt="shopping image" /></a>
                                    </div>
                                    <div class="shipping-item-text">
                                        <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
                                        <span class="pro-quality"><a href="#">S,Gary</a></span>
                                        <p>$19.95</p>
                                    </div>
                                </div>
                                <div class="shipping-total-bill">
                                    <div class="total-shipping-prices">
                                        <span class="shipping-total">$24.95</span>
                                        <span>Tổng</span>
                                    </div>
                                </div>
                                <div class="shipping-checkout-btn">
                                    <a href="checkout.html">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li class="active"><a href="/">Trang Chủ</a></li>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    @if($category->parent_id == 0)
                                        <li>
                                            <a href="{{ route('shop.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                            <!-- DRODOWN-MEGA-MENU START -->
                                            <div class="drodown-mega-menu">
                                                <div class="left-mega col-xs-6">
                                                    <div class="mega-menu-list">
                                                        <ul>
                                                            @foreach($categories as $child)
                                                                @if($category->id == $child->parent_id)
                                                                    <li><a href="{{ route('shop.category', ['slug' => $child->slug]) }}">{{ $child->name }}</a></li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- DRODOWN-MEGA-MENU END -->
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MAINMENU END -->
        </div>
        <div class="row">
            <!-- MOBILE MENU START -->
            <div class="col-sm-12 mobile-menu-area">
                <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                    <span class="mobile-menu-title">MENU</span>
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home variation 1</a></li>
                                    <li><a href="index-2.html">Home variation 2</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-gird.html">Women</a>
                                <ul>
                                    <li><a href="shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="shop-gird.html">T-Shirts</a></li>
                                            <li><a href="shop-gird.html">Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Dresses</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Casual Dresses</a></li>
                                            <li><a href="shop-gird.html">Summer Dresses</a></li>
                                            <li><a href="shop-gird.html">Evening Dresses</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="shop-gird.html">men</a>
                                <ul>
                                    <li><a href="shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Sports</a></li>
                                            <li><a href="shop-gird.html">Day</a></li>
                                            <li><a href="shop-gird.html">Evening</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Blouses</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Handbag</a></li>
                                            <li><a href="shop-gird.html">Headphone</a></li>
                                            <li><a href="shop-gird.html">Houseware</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Accessories</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Houseware</a></li>
                                            <li><a href="shop-gird.html">Home</a></li>
                                            <li><a href="shop-gird.html">Health & Beauty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-gird.html">clothing</a></li>
                            <li><a href="shop-gird.html">tops</a></li>
                            <li><a href="shop-gird.html">T-shirts</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="about-us.html">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MOBILE MENU END -->
        </div>
    </div>
</header>
