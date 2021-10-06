<section id="slider">
    <!--/#home-carousel-->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($officeImages as $key => $image)
            <div class="item {{$key == 0 ? 'active': ''}}" style="background-image:url({{asset($image->imageUrl)}})">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <center><h2>Geleceğin Mühendisi Servislet Akademi'de</h2></center>
                            <center><a class="btn btn-blank" href="#apply-section" target="_blank" role="button">Şimdi Başvur &nbsp <i class="fa fa-arrow-right"></i></a></center>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
    </div>
</section>
