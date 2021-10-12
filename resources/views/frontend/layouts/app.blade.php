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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KFVWV07KPB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KFVWV07KPB');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- HTML Meta Tags -->
    <title>Servislet Akademi</title>
    <meta name="description" content="İş yaşantısında kullanılan teknolojiler üzerine eğitim vererek çalışma hayatına tecrübeli mühendisler kazandırmayı hedefleyen hazırlık programıdır.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://akademi.servislet.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Servislet Akademi">
    <meta property="og:description" content="İş yaşantısında kullanılan teknolojiler üzerine eğitim vererek çalışma hayatına tecrübeli mühendisler kazandırmayı hedefleyen hazırlık programıdır.">
    <meta property="og:image" content="https://akademi.servislet.com/frontend/img/logo2-1.png">
    <meta name="og:keywords" content="Akademi, Servislet, Eğitim, Staj, php, laravel" />
    <meta name="og:author" content="servislet.com">

    <meta property='og:url' content='https://akademi.servislet.com/'>
    <meta property='og:type' content='website'>
    <meta property='og:title' content='Servislet Akademi'>
    <meta property='og:description' content='İş yaşantısında kullanılan teknolojiler üzerine eğitim vererek çalışma hayatına tecrübeli mühendisler kazandırmayı hedefleyen hazırlık programıdır.'>
    <meta property='og:image' content='https://akademi.servislet.com/frontend/img/logo2-1.png'>
    <meta name='og:keywords' content='Akademi, Servislet, Eğitim, Staj, php, laravel' />
    <meta name='og:author' content='servislet.com'>

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="">
    <meta property="twitter:url" content="https://akademi.servislet.com/">
    <meta name="twitter:title" content="Servislet Akademi">
    <meta name="twitter:description" content="İş yaşantısında kullanılan teknolojiler üzerine eğitim vererek çalışma hayatına tecrübeli mühendisler kazandırmayı hedefleyen hazırlık programıdır.">
    <meta name="twitter:image" content="https://akademi.servislet.com/frontend/img/logo2-1.png">
    <meta name="twitter:keywords" content="Akademi, Servislet, Eğitim, Staj, php, laravel" />
    <meta name="twitter:author" content="servislet.com">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->


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
