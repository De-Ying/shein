<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cửa hàng bán quần áo Shein trực tuyến | @yield('meta_title')</title>
    <!-- Icon desktop and mobile -->

    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('public/frontend/images/favicon/48.png') !!}">
    <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('public/frontend/images/favicon/72.png') !!}" />
    <link rel="apple-touch-icon" sizes="96x96" href="{!! asset('public/frontend/images/favicon/96.png') !!}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('public/frontend/images/favicon/144.png') !!}" />
    <link rel="apple-touch-icon" sizes="192x192" href="{!! asset('public/frontend/images/favicon/192.png') !!}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{!! asset('public/frontend/css/bootstrap.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/font-awesome.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/elegant-icons.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/jquery-ui.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/magnific-popup.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/owl.carousel.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/slicknav.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/frontend/css/style.css') !!}" type="text/css">

    @yield('styles')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{!! asset('public/frontend/images/logo.png') !!}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('inc.header')
    <!-- Header Section End -->

    <!-- Content Page Begin-->
    @yield('content')
    <!-- Content Page End -->

    <!-- Footer Section Begin -->
    @include('inc.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{!! asset('public/frontend/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/jquery.magnific-popup.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/mixitup.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/jquery.countdown.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/jquery.slicknav.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/jquery.nicescroll.min.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/main.js') !!}"></script>
    <script src="{!! asset('public/frontend/js/custom.js') !!}"></script>


    @yield('scripts')
</body>

</html>
