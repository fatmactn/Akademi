<!doctype html>
<!--
	Template:	 Servislet - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0
-->
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Servislet Akademi</title>
    <meta name="description" content="İş yaşantısında kullanılan yazılımlar ve teknolojiler üzerine eğitim vererek çalışma hayatına tecrübeli mühendisler kazandırmayı hedeflemek amacıyla Servislet bünyesinde başlatılmış olan hazırlık programıdır.">
    <meta name="keywords" content="Akademi, Servislet, Eğitim, Staj, php, laravel, mobil, ui/ux, michelin, lastik" />
    <meta name="author" content="servislet.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/inc/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/animations/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/owl-carousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/inc/owl-carousel/css/owl.theme.css')}}">
    <!-- Font Icons -->


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mobile.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

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
    <!--/#home-carousel-->
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
<script src="{{asset('frontend/js/lightbox.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


<!-- Theme JS -->
<script src="{{asset('frontend/js/theme.js')}}"></script>


<script>
    var btnGizle=document.getElementById("sorugetir");
    var id = 3;
    btnGizle.onclick=function(){
        //display özelliği none yapılarak gizleme işlemi yapılır.
        document.getElementById("soru-"+id).style.display="block";
        id++;
    }
</script>

</body>


</html>
