<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- FONTS
    ============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/animate.css">

    <!-- FANCYBOX CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/jquery.bxslider.css">

    <!-- MEANMENU CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/owl.theme.css">

    <!-- BOOTSTRAP CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/font-awesome.min.css">

    <!-- NORMALIZE CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/normalize.css">

    <!-- MAIN CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/main.css">

    <!-- STYLE CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/style.css">

    <!-- RESPONSIVE CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/responsive.css">

    <!-- IE CSS
    ============================================ -->
    <link rel="stylesheet" href="shop/css/ie.css">

    <!-- MODERNIZR JS
    ============================================ -->
    <script src="shop/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="index-2">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->
@include('shop.layouts.header')
<!-- MAIN-MENU-AREA START -->
@include('shop.layouts.menu')
<!-- MAIN-MENU-AREA END -->
@include('shop.layouts.main-menu')
<!-- MAIN-CONTENT -->
@yield('content')
<!-- BRAND-CLIENT-AREA START -->
@include('shop.layouts.footer')
<!-- COPYRIGHT-AREA START -->
<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="copy-right">
                    <address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
                </div>
                <div class="scroll-to-top">
                    <a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- COPYRIGHT-AREA END -->
<!-- JS
===============================================-->
<!-- jquery js -->
<script src="shop/js/vendor/jquery-1.11.3.min.js"></script>

<!-- fancybox js -->
<script src="shop/js/jquery.fancybox.js"></script>

<!-- bxslider js -->
<script src="shop/js/jquery.bxslider.min.js"></script>

<!-- meanmenu js -->
<script src="shop/js/jquery.meanmenu.js"></script>

<!-- owl carousel js -->
<script src="shop/js/owl.carousel.min.js"></script>

<!-- nivo slider js -->
<script src="shop/js/jquery.nivo.slider.js"></script>

<!-- jqueryui js -->
<script src="shop/js/jqueryui.js"></script>

<!-- bootstrap js -->
<script src="shop/js/bootstrap.min.js"></script>

<!-- wow js -->
<script src="shop/js/wow.js"></script>
<script>
    new WOW().init();
</script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- main js -->
<script src="shop/js/main.js"></script>
</body>

</html>
