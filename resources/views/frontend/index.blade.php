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
    <title>Servislet Başvuru Formu</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio"/>
    <meta name="author" content="imransdesign.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->

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

<div class="body">

    <div class="extra-space-l"></div>
    <section id="apply-section" class="page text-white parallax" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('frontend/img/basvuru.jpeg')}});">
        <div class="cover"></div>

        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>Başvuru Formu</h2>
                    <div class="devider"></div>
                    <!-- <p class="subtitle">All to contact us</p> -->
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class="apply wow bounceInRight" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"></div>

                    <div class="col-sm-6">
                        <div class="apply-form">
                            <form role="form" action="{{route('frontend.form.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <input type="text" name="nameSurname" class="form-control input-lg text-white" placeholder="Adınız :" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control input-lg text-white" placeholder="E-mailiniz :"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="linkedinUrl" class="form-control input-lg text-white" placeholder="LinkedIn Url :">
                                </div>
                                <div class="input-group">
                                    <input type="text"  class="form-control input-lg text-white" placeholder="Özgeçmiş :"
                                           aria-describedby="basic-addon2" disabled>
                                    <span class="input-group-addon" id="basic-addon2"><input type="file" name="resumePath"
                                                                                             placeholder="Özgeçmiş :"></span>
                                </div>
                                <br>
                                <div class="form-check">
                                    <input
                                        class="form-check-input" type="checkbox" name="isKvkk" id="isKvkk"/>
                                    <label class="form-check-label" for="flexCheckChecked">

                                        <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&MevzuatTur=1&MevzuatTertip=5" class="text-white" target="_blank">Kvkk yı kabul et </a>
                                    </label>
                                </div>
                                <div class="extra-space-l"></div>
                                <button type="submit" class="btn wow bounceInRight" id="submitButton" data-wow-delay="0.8s"
                                        style="background-color:#363940;">BAŞVUR
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-3"></div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>


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

    <script>
        $( document ).ready(function() {
           if(!$('#isKvkk').is('checked')){
               $('#submitButton').addClass('disabled')
           }
        });


        $('#isKvkk').change(function () {
            if(this.checked){
                $('#submitButton').removeClass('disabled')
            } else {
                $('#submitButton').addClass('disabled')
            }
        })
    </script>
</div>
</body>


</html>
