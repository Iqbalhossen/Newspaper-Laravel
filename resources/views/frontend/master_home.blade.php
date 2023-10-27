<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khobor - Modern Magazine & Newspaper HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    <!-- ycp -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/ycp.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">
    
    <!-- Header Top Start -->
        @include('frontend.body.top_header')
    <!-- Header Top End -->
    
    <!-- Header Start -->
    @include('frontend.body.header')
    <!-- Header End -->
    
    <!-- Menu Section Start -->
    @include('frontend.body.menu')
    <!-- Menu Section End -->















    
    <!-- Breaking News Section Start -->
    @include('frontend.body.breaking_news')
    <!-- Breaking News Section End -->
    
    @yield('home')
    
   @include('frontend.body.footer')
    
</div>


<!-- JS
============================================ -->

<script src="{{asset('auth/error-function.js')}}"></script>
<!-- jQuery JS -->
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery-migrate-1.4.1.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<!-- ycp JS -->
<script src="{{asset('frontend/assets/js/ycp.js')}}"></script>
<!-- Ajax Mail JS -->
<script src="{{asset('frontend/assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

@yield('script')
<!-- {{asset('frontend/assets/')}} -->
<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("menu-sticky");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("menu-sticky")
      } else {
        navbar.classList.remove("menu-sticky");
      }
    }
    </script>
    

</body>



</html>