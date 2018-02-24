<div class="row">
    <div id="carosel-top" class="container-fluid bg-white " style="position:relative; ">
        <!-- ***** Wellcome Area Start ***** -->
        <div id="carouselExampleIndicators" class=" clearfix carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $carousel_items = [
                
                    ['img' => 'adt-monitored-syetm-provies-peace-of-mind.png', 'alt' => 'adt monitored syetm provies peace of mind', 'active' => true],
      
                    ['img' => 'adt-happy-customer.png', 'alt' => 'adt-happy-customer', 'active' => false],
                    ['img' => 'adt-commercial-security-by-mhb-security-adt-dealer.png', 'alt' => 'adt commercial security by mhb security adt dealer', 'active' => false],
                ]
                ?>
                @foreach($carousel_items as $value)
                    <div class="carousel-item {{$value['active']==true?"active":""}}">
                        <img class="d-block w-100 imag-responsive" src="/img/adt-images/headslider/{{$value['img']}}"
                             alt="{{$value['alt']}}">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>


        </div>

        <div class=" main-text " style="padding-top:80px;">
            <div class="  text-center">
                <section class="form-elegant">

                    <!--Form without header-->
                    <div class="card  wow fadeInUp">
                        <div class="text-center" style="background-color: #0057D2!important">
                            <h5  style="color:white; padding:10px; margin-top:25px; "><strong>FREE HOME Security
                                    Review</strong></h5>
                        </div>
                        <div class="card-body col-md-12">

                            <!--Header-->

                            <div class="form-group">


                                <div class="col-md-12">
                                    <div class="col-lg">

                                        <label for="happy">Home Owner?</label>
                                    </div>
                                    <div class="col-lg">


                                        <!-- Switch -->

                                        <!-- Normal switch -->
                                        <span class="switch">

                                            <label for="switch-normal">Yes</label>

                                            <input type="checkbox" class="switch" id="switch-normal">
                                            <label for="switch-normal">No</label>
                                        </span>
                                    </div>
                                </div>
                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="Form-email1" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="md-form">
                                    <input type="text" id="Form-pass1" class="form-control" placeholder="Phone">
                                </div>
                                <div class="md-form ">
                                    <input type="text" id="Form-pass1" class="form-control" placeholder="Email">
                                </div>
                                <div class="text-center mb-3">
                                    <button type="button" class="btn btn-rounded" style="background-color: #0057D2!important">GET A FREE QUOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--/Form without header-->
                </section>

            </div>
        </div>

    </div>


</div>
