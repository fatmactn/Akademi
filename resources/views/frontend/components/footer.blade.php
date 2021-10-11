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
                    <center><h4>Sıkça Sorulan Sorular</h4></center>
                    @foreach($questions as $key => $question)
                        <div id="soru-{{$key}}" style="display:{{$key > 2 ? 'none': 'block'}}">
                            <input type="radio" name="example_accordion" id="{{$question->id}}"
                                   class="accordion__input">
                            <label for="{{$question->id}}"
                                   class="accordion__label">- {{$question->question}}</label>
                            <div class="accordion__content">
                                <p>
                                    {{$question->answer}}
                                </p>
                            </div>
                        </div>
                    @endforeach

                    <div class="extra-space-l"></div>
                    <center>
                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s" style="width:200px;"
                                id="sorugetir">
                            DAHA FAZLA SORU
                        </button>
                    </center>
                    <div class="extra-space-l"></div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>

    <!-- Begin contact section -->
    <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('frontend/img/map.png')}});">
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
                        @foreach($contacts as $contact)
                            <div class="contact-address">
                                <div class="items">
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    <div class="adres-txt">
                                        <p>{{$contact->address}}</p>
                                        <a
                                            href="{{$contact->mapUrl}}" class="text-dark "
                                            target="_blank">
                                            <button class="btn btn-blank wow bounceInRight" data-wow-delay="0.8s">
                                                Konumu Gör
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="items"><i class="fa fa-phone"><a href="tel:{{$contact->phone}}"
                                                                             class="text-white">{{$contact->phone}}</a></i>
                                </div>
                                <div class="items"><i class="fa fa-envelope"><a href="mailto:{{$contact->mail}}"
                                                                                class="text-white">&nbsp;{{$contact->mail}}</a></i>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-sm-6">
                        <div class="apply-form">
                            <form role="form" action="{{route('frontend.contactForm.store')}}" method="POST">
                                @csrf
                                @if(session('success0'))
                                    <div class="alert alert-success">
                                        <i class="fa fa-check"></i>
                                        {{session('success0')}}
                                    </div>
                                @elseif(session('error0'))
                                    <div class="alert alert-danger">
                                        <i class="fa fa-times"></i>
                                        {{session('error0')}}
                                    </div>
                                @endif
                                <div class="form-group ">
                                    <input type="text" name="name" class="form-control input-lg text-white"
                                           placeholder="Adınız :" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control input-lg text-white"
                                           placeholder="E-mailiniz :"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control input-lg text-white"
                                           placeholder="Konu :">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control input-lg text-white"
                                           placeholder="Mesajınız :">
                                </div>
                                <br>
                                <div class="form-check">
                                    <div class="kvk">
                                        <input
                                            class="form-check-input" type="checkbox" name="isKvkk" id="isKvkk1"/>
                                        <label class="form-check-label" for="flexCheckChecked">

                                            <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&MevzuatTur=1&MevzuatTertip=5"
                                               class="text-white" target="_blank">KVKK Aydınlatma Metnini Kabul
                                                Ediyorum </a>
                                        </label>
                                    </div>
                                </div>
                                <div class="extra-space-l"></div>
                                <button type="submit" class="btn wow bounceInRight" id="submitButton1"
                                        data-wow-delay="0.8s"
                                        style="background-color:#363940; color: white">GÖNDER
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
            <p class="copyright">Copyright &copy; 2021 - Designed By <a href="https://www.servislet.com/"
                                                                        class="theme-author text-white">Servislet</a>
            </p>
            <br>
            <p>- The &nbsp;<img src="{{asset('frontend/img/unicorn.png')}}"></p>
        </div>
    </div>

</footer>


<!--<div id="sorular" display="none">
                              <div>
             <input type="radio" name="example_accordion" id="{{$question->id}}"
                  class="accordion__input">
               <label for="{{$question->id}}"
              class="accordion__label">- {{$question->question}}</label>
                       <div class="accordion__content">
                        <p>
                            {{$question->answer}}
    </p>
</div>
</div>

</div>-->
