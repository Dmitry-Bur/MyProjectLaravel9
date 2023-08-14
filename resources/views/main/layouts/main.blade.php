<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('main/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/jquery-ui.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">


    <!--modernizr min js here-->
    <script src="{{asset('main/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }


    </script>
</head>
<body>

<!--header area start-->
@include('main.includes.header')

<!--mini cart-->

<!--mini cart end-->

<!-- page search box -->
<div class="page_search_box">
    <div class="search_close">
        <i class="ion-close-round"></i>
    </div>
    <form class="border-bottom" action="#">
        <input class="border-0" placeholder="Search products..." type="text">
        <button type="submit"><span class="pe-7s-search"></span></button>
    </form>
</div>

<!-- breadcrumbs area start -->
@include('main.includes.breadcrumbs')
<!-- breadcrumbs area end -->

<!-- product page section start -->
<div class="product_page_section mb-100">
    <div class="container">
        <div class="row">
            @include('main.includes.leftSidebar')
            @yield('content')
        </div>
    </div>
</div>
<!-- product page section end -->

<!--footer area start-->
@include('main.includes.footer')
<!--footer area end-->

<!-- modal area start-->
@include('main.includes.modalView')
<!-- modal area end-->
<!-- JS ========================================== -->

<script src="{{asset('main/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('main/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<script src="{{asset('main/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('main/js/slick.min.js')}}"></script>
<script src="{{asset('main/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('main/js/wow.min.js')}}"></script>
<script src="{{asset('main/js/jquery.scrollup.min.js')}}"></script>
<script src="{{asset('main/js/jquery.nice-select.js')}}"></script>
<script src="{{asset('main/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('main/js/mailchimp-ajax.js')}}"></script>
<script src="{{asset('main/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('main/js/jquery.zoom.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('main/js/main.js')}}"></script>

</body>
</html>
