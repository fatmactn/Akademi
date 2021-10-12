<section id="about-section" class="page bg-style1">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Akademi</h2>
                <div class="devider"></div>
            </div>
        </div>
    </div>
    <!-- End page header-->

    <!-- Begin rotate box-1 -->
    <div class="rotate-box-1-wrapper">
        <div class="container">
            <div class="row">
                @foreach($contents as $content)
                    @if($content->status == 1)
                        <div class="col-md-6 col-sm-12">
                            <a class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                <span class="rotate-box-icon"><i class="fa fa-dot-circle-o"></i></span>
                                <div class="rotate-box-info">
                                    <h4>{{$content->title}}</h4>
                                    <p>{{$content->content}}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- End rotate box-1 -->

    <div class="extra-space-l"></div>

</section>
