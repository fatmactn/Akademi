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
                        <form role="form" action="{{route('frontend.form.store')}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @if(session('success1'))
                                <div class="alert alert-success">
                                    <i class="fa fa-check"></i>
                                    {{session('success1')}}
                                </div>
                            @elseif(session('error1'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-times"></i>
                                    {{session('error1')}}
                                </div>
                            @endif
                            <div class="form-group ">
                                <input type="text" name="nameSurname" class="form-control input-lg text-white"
                                       placeholder="Adınız :" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="mail" class="form-control input-lg text-white"
                                       placeholder="E-mailiniz :"
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="linkedinUrl" class="form-control input-lg text-white"
                                       placeholder="LinkedIn Url :" required>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control input-lg text-white" placeholder="Özgeçmiş :"
                                       aria-describedby="basic-addon2" disabled>
                                <span class="input-group-addon" id="basic-addon2"><input type="file" name="resumePath"  accept=".pdf"
                                                                                         placeholder="Özgeçmiş :(Zorunlu değil)" ></span>
                            </div>
                            <br>
                            <div class="form-check">
                                <div class="kvk">
                                    <input
                                        class="form-check-input" type="checkbox" name="isKvkk" id="isKvkk" required/>
                                    <label class="form-check-label" for="flexCheckChecked" >

                                        <a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=6698&MevzuatTur=1&MevzuatTertip=5"
                                           class="text-white" target="_blank"> &nbsp;&nbsp;&nbsp;
                                            KVKK aydınlatma metnini kabul ediyorum </a>
                                    </label>
                                </div>
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

