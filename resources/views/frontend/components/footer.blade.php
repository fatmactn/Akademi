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
                    <div>
                        <input type="radio" name="example_accordion" id="section1" class="accordion__input">
                        <label for="section1" class="accordion__label">- Soru 1</label>
                        <div class="accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                        <label for="section2" class="accordion__label">- Soru 2</label>
                        <div class="accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="example_accordion" id="section3" class="accordion__input">
                        <label for="section3" class="accordion__label">- Soru 3</label>
                        <div class="accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
                                aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
                                voluptatibus fugiat fuga facere!
                            </p>
                        </div>
                    </div>
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
                        <div class="contact-form">
                            <h4>Bize Ulaşın</h4>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Adınız :" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" placeholder="E-mailiniz :" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Konu :" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control input-lg" rows="5" placeholder="Mesajınız :" required></textarea>
                                </div>
                                <button type="submit" class="btn wow bounceInRight" style="color:white;" data-wow-delay="0.8s">GÖNDER</button>
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
