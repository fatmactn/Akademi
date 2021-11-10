<section id="portfolio-section" class="page bg-style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio">
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Ofisimiz</h2>
                                <div class="devider"></div>
                                <br><br><br>
                                <iframe src="https://test.visetra.com/#/embed/616ef3196993730ec3da5f66" frameBorder="0"></iframe>
                                @foreach($contents as $content)
                                    <p class="subtitle">@if($content->title == 'ofis' && $content->status == 1) {{$content->$content}} @endif</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="portfoloi_content_area">
                        <div class="portfolio_content">
                            <div class="row" id="portfolio">
                                @foreach($officeImages as $officeImage)
                                    @if($officeImage->content)

                                        <div class="col-xs-12 col-sm-4 ">
                                            <div class="portfolio_single_content">
                                                <a data-fancybox="gallery" href="{{url($officeImage->imageUrl)}}"><img
                                                        src="{{url($officeImage->imageUrl)}}"/>
                                                    <div>
                                                        <p>{{$officeImage->content}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
