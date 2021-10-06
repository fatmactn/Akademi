
<footer class="text-off-white" id="questions-section">
    <div class="footer-top">
        <div class="container">
            <div class="row wow bounceInLeft" data-wow-delay="0.4s">
                <br><br>
                <!-- <div class="col-sm-12 col-md-6"> -->
                <!-- <h4>Menü</h4> -->
                <!-- <ul class="imp-links"> -->
                <!-- <li><a href="#about-section">- Akademi Hakkında</a></li><br> -->
                <!-- <li><a href="#portfolio-section">- Ofis</a></li><br> -->
                <!-- <li><a href="#team-section">- Ekibimiz</a></li><br> -->
                <!-- <li><a href="#apply-section">- Başvuru</a></li><br> -->
                <!-- <li><a href="#contact-section">- İletişim</a></li> -->
                <!-- </ul> -->
                <!-- </div> -->

                <div class="col-sm-12 col-md-12">
                    <h4>Sıkça Sorulan Sorular</h4>
                    @foreach($questions as $question)
                        @if($question->status==1)
                    <div>
                        <input type="radio" name="example_accordion" id="{{$question->id}}" class="accordion__input">
                        <label for="{{$question->id}}" class="accordion__label">- {{$question->question}}</label>
                        <div class="accordion__content">
                            <p>
                                {{$question->answer}}
                            </p>
                        </div>
                    </div>
                        @endif
                    @endforeach

                    <div class="extra-space-l"></div>
                    <center><button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s" style="width:200px;">DAHA FAZLA SORU</button></center>
                    <div class="extra-space-l"></div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>

    <!-- Begin contact section -->
    <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url({{asset('frontend/img/map.png')}});">
        <div class="cover"></div>

        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>İLETİŞİM</h2>
                    <div class="devider"></div>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class="contact wow bounceInRight" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contact-info">
                            <ul class="contact-address">
                                <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; North Star Plaza,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. Kat Daire 17-18<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Çayyolu / ANKARA <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-blank wow bounceInRight" data-wow-delay="0.8s"><a href="https://www.google.com.tr/maps/dir/39.8742547,32.6842492/North+Star/@39.8750219,32.6614685,13.72z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x14d338dd26c41c15:0x2dc46c3d247b205e!2m2!1d32.6827851!2d39.8817533?hl=en-tr" class="text-dark">Konumu Gör</a></button></li>
                                <br>
                                <li><i class="fa fa-phone"></i>&nbsp;<a href="tel:+908503020502" style="color:white;"> +908503020502</a></li>
                                <br>
                                <li><i class="fa fa-envelope"></i><a href="mailto:destek@servislet.com" style="color:white;"> &nbsp;&nbsp;destek@servislet.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="apply-form">
                            <form role="form" action="{{route('frontend.contactForm.store')}}" method="POST">
                                @csrf
                                <div class="form-group ">
                                    <input type="text" name="name" class="form-control input-lg text-white" placeholder="Adınız :" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control input-lg text-white" placeholder="E-mailiniz :"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control input-lg text-white" placeholder="Konu :">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control input-lg text-white" placeholder="Mesajınız :">
                                </div>
                                <br>
                                <div class="form-check">
                                    <input
                                        class="form-check-input" type="checkbox" name="isKvkk" id="isKvkk1"/>
                                    <label class="form-check-label" for="flexCheckChecked">

                                        <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&MevzuatTur=1&MevzuatTertip=5" class="text-white" target="_blank">Kvkk yı kabul et </a>
                                    </label>
                                </div>
                                <div class="extra-space-l"></div>
                                <button type="submit" class="btn wow bounceInRight" id="submitButton1" data-wow-delay="0.8s"
                                        style="background-color:#363940;">GÖNDER
                                </button>
                            </form>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End contact section -->

    <div class="footer">
        <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
            <p class="copyright">Copyright &copy; 2021 - Designed By <a href="https://www.servislet.com/" class="theme-author text-white">Servislet</a></p>
            <br>
            <p>- The &nbsp;<img src="img/unicorn.png"></p>
        </div>
    </div>

</footer>


