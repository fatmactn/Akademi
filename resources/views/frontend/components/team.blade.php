<section id="team-section" class="page" style="background-color:#343a40; color:white;">
    <!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                <h2>Ekibimiz</h2>
                <div class="devider"></div>
                <!-- <p class="subtitle">Meat our experts</p> -->
            </div>
        </div>
    </div>
    <!-- End page header-->
    <div class="container">
        <div class="row">
            <div class="team-items">

                @foreach($employees as  $employee)
                <div class="col-md-2">
                    <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-triangle">
                                <div class="content">
                                    <img src="{{asset($employee->imageUrl)}}" alt="title"/>
                                    <div class="team-hover text-center">
                                        <i class="fa fa-user"></i>
                                        <p>{{$employee->nameSurname}} </p>
                                        <p>{{$employee->degree}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
