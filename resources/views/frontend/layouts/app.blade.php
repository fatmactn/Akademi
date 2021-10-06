<!doctype html>
<!--
	Template:	 Unika - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0
-->
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Unika - Responsive One Page HTML5 Template</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
    <meta name="author" content="imransdesign.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/inc/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/animations/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/font-awesome/css/font-awesome.min.css')}}"> <!-- Font Icons -->


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mobile.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/skin/cool-gray.css')}}">

</head>

<body data-spy="scroll" data-target="#main-navbar">
<div class="page-loader"></div>  <!-- Display loading image while page loads -->
<div class="body">

    <!--========== BEGIN HEADER ==========-->
    <header id="header" class="header-main">

        <!-- Begin Navbar -->
        @include('frontend.components.navbar')
        <!-- End Navbar -->

    </header>
    <!-- ========= END HEADER =========-->
    <div class="extra-space-l"></div>
    @include('frontend.components.slider')
    <!-- Begin about section -->
    @include('frontend.components.about')
    <!-- End about section -->

    <!-- Begin Services -->
    @include('frontend.components.services')
    <!-- End Services -->

    <!-- Begin Portfolio -->
    @include('frontend.components.portfolio')
    <!-- End portfolio -->


    <!-- Begin team-->
    @include('frontend.components.team')
    <!-- End team-->

    <div class="extra-space-l"></div>
    @include('frontend.components.form')



    <!-- Begin social section -->
    @include('frontend.components.social')
    <!-- End social section -->





    <!-- Begin footer -->
    @include('frontend.components.footer')
    <!-- End footer -->

    <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->

</div><!-- body ends -->





<!-- Plugins JS -->
<script src="{{asset('frontend/inc/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('frontend/inc/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/inc/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/inc/stellar/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/inc/animations/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/inc/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/inc/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/inc/classie.js')}}"></script>
<script src="{{asset('frontend/inc/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/inc/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/inc/smoothscroll.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('frontend/js/theme.js')}}"></script>



</body>


</html>
