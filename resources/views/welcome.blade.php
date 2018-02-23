@extends("home-layouts.app")
@section("content")
<!-- ***** Header Area End ***** -->
<div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 text-center banner-under-home" >
                <p>ADT Home Security with Burglary, Fire, and Medical protection Serving B.C., ALberta, Saskatchewan, Maintoba, Ontario</p>
            </div>
        </div>
</div>
<!-- ***** Special Area Start ***** -->

<div class="container bg-white" style="padding:10px;">
    <div class="row">

        <div class="col-lg-6 col-sm-12">
            <!--<h2>Toggleable Tabs</h2>-->
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#first">Residential</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Security Systems</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Protection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">Alarm Equipment</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content card">
                <div id="first" class="container tab-pane active"><br>
                    <div style="padding:10px;">
                        <h3>HOME</h3>

                        <ul class="circle-ul">
                            <li>Free* $1,450 Value ADT® Monitored Home Security Alarm System with Free Activation</li>
                            <li>Three Coupons of 3 Days & 2 Night Hotel Stay Vacation for CAA Members or Visa Card
                                Holders (Learn More)
                            </li>

                            <li>Free High Resolution Color Surveillance Camera with Night Vision & Remote View from
                                World Wide, Free in all Camera Pkgs.
                            </li>

                            <li>24/7 Immediate emergency Police, Fire and Medical response</li>

                            <li>May save up to 25% on your Homeowners Insurance</li>

                            <li>ADT Security $500 Theft Protection Guarantee, System for Life Guarantee, Free
                                Maintenance on Parts & Labour as long as you stay with ADT
                            </li>

                            <li>ADT Canada Money-Back Service Guarantee (certain restrictions apply)</li>
                        </ul>
                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam.</p>
                </div>

                <div id="menu3" class="container tab-pane fade"><br>
                    <h3>Menu 3</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam.</p>
                </div>
            </div>
        </div>


        <!-- ***** Special Area Start ***** -->


        <div class="col-lg-6 col-sm-12" style='padding-top:10px;' id="carosel-center">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php
                    $carousel_items = [
                        ['img' => 'adt-pulse-interactive-system.jpg', 'alt' => 'adt-pulse-interactive-system', 'active' => false],
                        ['img' => 'adt-pulse-interactive.jpg', 'alt' => 'adt-pulse-interactive', 'active' => false],
                        ['img' => 'articles_12.jpg', 'alt' => 'articles_12', 'active' => true],
                        ['img' => 'how-smart-home-works-by-mhb-security-adt-dealer.jpg', 'alt' => 'how-smart-home-works-by-mhb-security-adt-dealer', 'active' => false],

                    ];
                    ?>
                    @foreach($carousel_items as $value)
                        <div class="carousel-item {{$value['active']==true?"active":""}}">
                            <img class="d-block w-100" src="/img/adt-images/secondslider/{{$value['img']}}"
                                 alt="{{$value['alt']}}">
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>


    </div>
</div>

<div class="container bg-white" id="features" style="padding-top:30px;">
    <div class="row">
        <div class="col-12">
            <!-- Heading Text -->
            <div class="section-heading text-center">
                <h2>Advantages</h2>
                <div class="line-shape"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--Card-->
        @for($i=0;$i<0;$i++)
            <div class="col-lg-4 col-sm-3 wow fadeInDown" style="padding:10px;">
                <div class="card">
                    <!--Panel-->
                    <div class="card hoverable">
                        <h3 class="card-header primary-color white-text text-center" style="padding-bottom:40px;">
                            Featured</h3>
                        <div class="card-body" style="padding:10px;">
                            <div class="bg-white" style="margin-top:-41px;">
                                <div class="view overlay hm-white-slight" style="padding:10px;">
                                    <img src="http://www.mhbsecurity.com/2009050911471198.jpg" class="img-fluid" alt="">
                                    <a href="#">
                                        <div class="mask"></div>
                                    </a>
                                </div>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a class="btn btn-primary">See More</a>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel-->

                </div>
            </div>
        @endfor

        @for($i=0;$i<3;$i++)
            <div class="col-lg-4 col-sm-8 offset-lg-0  offset-sm-2 box wow fadeInUp">
                <div class="col-lg-12 box-head " >
                    Feature
                </div>
                <div class="col-lg-12 box-body">
                    <div class="col-lg-12 box-content text-center">
                        <img width="200" height="150" src="/img/core-img/landing-first.png">
                        <div class="clearfix"></div>
                        <center>
                            <p>
                                The benefits are numerous, almost endless, but let’s look at some of the things our
                                customers are enjoying most about ADT Pulse. The first is the ability to check the
                                status of your
                            </p>
                        </center>

                    </div>
                </div>
                <center>
                    <a style="box-shadow:1px -45px 28px 2px midnightblue;" href="#" class="btn btn-primary">Read  More</a></center>
            </div>

        @endfor
    </div>
</div>


<!-- ***** Awesome Features Start ***** -->


<div class="section_padding_50_20 well-lg well bg-white" id="about" style=" padding-top:50px; padding-bottom: 50px; ">
    <div class="container  wow fadeInUp" style="">
        <div class="products-carousal">
            @foreach($products as $product)
                <div id="product" data-toggle="modal" product="{{$product->id}}" data-target="#myModal">
                    <div class="card hoverable">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img class="img-thumbnail" style="width:100%;"
                                         src="/uploads/products/{{$product->picture}}"
                                         alt='{{$product->picture_description}}'>
                                </div>

                            </div>

                        </div>


                    </div>
                    <h5 class="text-center"> {{$product->name}}</h5>
                </div>
            @endforeach
        </div>
    </div>

</div>


<!-- ***** Awesome Features End ***** -->


<!-- Special Description Area -->
<section class="special_description_area bg-white p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="special_description_img">
                    <img src="img/adt-images/draggerContent/ADT_Dealer_FR.png" class="wow fadeInDown"
                         style="margin-bottom:-50px;" alt="ADT Dealer FR">
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ml-xl-auto wow fadeInUp">
                <div class="special_description_content ">
                    <h2>When You Choose MHB & ADT, You Are in Good Company</h2>
                    <p>Let us provide you with the peace of mind that comes from knowing that the #1 security company in
                        North America is helping protect your home and family, 24 hours a day, 7 days a week. For over
                        136 years, ADT has been the most respected name in the security business.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="ract">
        <a href="#next3">
            <div class="container arrow-ract">
                <div class="arrow-down text-center ">
                    <i class="ti-download fa-3x"></i></div>
            </div>
        </a>
    </div>
</section>


<!-- ***** Special Area End ***** -->

<section class="special_description_area p-t-20" id="next3"
         style=" background-position:center; background-image: url(/img/adt-images/draggerContent/adt-security-by-mhb-security-adt-dealer.png); background-size: cover; ">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-xl-5 ml-xl-auto wow fadeInRight">
                <div class="special_description_content ">
                    <h2 class="white-text">When You Choose MHB & ADT, You Are in Good Company</h2>
                    <p class="white-text">Let us provide you with the peace of mind that comes from knowing that the #1
                        security company in North America is helping protect your home and family, 24 hours a day, 7
                        days a week. For over 136 years, ADT has been the most respected name in the security
                        business.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="special_description_img white-text">
                    <img src="/img/adt-images/draggerContent/adt-pulse-system.png" style="margin-bottom: -50px;"
                         alt="adt pulse system" class="wow fadeInDown" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="ract">
        <a href="#next2">
            <div class="container arrow-ract">
                <div class="arrow-down text-center ">
                    <i class="ti-download fa-3x white-text"></i></div>
            </div>
        </a>
    </div>
</section>


<section class="special_description_area p-t-20 bg-white" id="next2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="special_description_img">
                    <img src="img/bg-img/welcome-img.png" class="wow fadeInRight" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ml-xl-auto">
                <div class="special_description_content wow fadeInUp">
                    <h2>When You Choose MHB & ADT, You Are in Good Company</h2>
                    <p>Let us provide you with the peace of mind that comes from knowing that the #1 security company in
                        North America is helping protect your home and family, 24 hours a day, 7 days a week. For over
                        136 years, ADT has been the most respected name in the security business.</p>
                    <div class="app-download-area">
                        <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Google Store Btn -->
                            <a href="#">
                                <i class="fa fa-android"></i>
                                <p class="mb-0"><span>available on</span> Google Store</p>
                            </a>
                        </div>
                        <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                            <!-- Apple Store Btn -->
                            <a href="#">
                                <i class="fa fa-apple"></i>
                                <p class="mb-0"><span>available on</span> Apple Store</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ract">
        <a href="#next">
            <div class="container arrow-ract">
                <div class="arrow-down text-center ">
                    <i class="ti-download fa-3x"></i></div>
            </div>
        </a>
    </div>
</section>


<section class="special_description_area bg-white p-t-20"
         id="next">

    <img style="width:100%;" height="500"
         src="/img/adt-images/draggerContent/adt-interactive-pulse-system-explained.png">


</section>
<!-- ***** Video Area Start ***** -->
<div class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Video Area Start -->
                <div class="video-area" style="background-image: url(img/core-img/play3.jpg);">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play"
                                                                                                   aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Video Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool_facts_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3><span class="counter">90</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-arrow-down-a"></i>
                        <p>Delivered <br> This month</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                        <h3><span class="counter">12000</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-happy-outline"></i>
                        <p>Happy <br> Clients</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h3><span class="counter">40</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-person"></i>
                        <p>Branches <br></p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-area">
                        <h3><span class="counter">1000</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-ios-star-outline"></i>
                        <p>LESS <br> RATES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** App Screenshots Area Start ***** -->
<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Products</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- App Screenshots Slides  -->
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="img/scr-img/app-1.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-2.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-3.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-4.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-5.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** App Screenshots Area End *****====== -->

<!-- ***** Pricing Plane Area Start *****==== -->
<!--    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                     Heading Text
                    <div class="section-heading text-center">
                        <h2>Security Plans</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-3">
                     Package Price
                    <div class="single-price-plan text-center">
                         Package Text
                        <div class="package-plan">
                            <h5>Starter Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>29</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                         Plan Button
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                     Package Price
                    <div class="single-price-plan text-center">
                         Package Text
                        <div class="package-plan">
                            <h5>Basic Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>49</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                         Plan Button
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                     Package Price
                    <div class="single-price-plan active text-center">
                         Package Text
                        <div class="package-plan">
                            <h5>Advenced Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>69</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                         Plan Button
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                     Package Price
                    <div class="single-price-plan text-center">
                         Package Text
                        <div class="package-plan">
                            <h5>Community Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>99</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                         Plan Button
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<!-- ***** Pricing Plane Area End ***** -->

<!-- ***** Client Feedback Area Start ***** -->
<section class="clients-feedback-area section_padding_100 clearfix" id="testimonials" style="background: #f5f9fc;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's
                                great for taking images and making clickable image prototypes that do the job and save
                                me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Aigars Silkalns</h5>
                            <p>Ceo Colorlib</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable
                                image prototypes that do the job and save me the coding time and just the general hassle
                                of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Jennifer</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's
                                great for taking images and making clickable image prototypes that do the job.”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Helen</h5>
                            <p>Marketer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's
                                great for taking images and making clickable image prototypes that do the job and save
                                me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Henry smith</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Thumbnail Area -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="slider slider-nav">
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-3.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-2.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-1.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Client Feedback Area End ***** -->

<!-- ***** CTA Area Start ***** -->
<section class="our-monthly-membership section_padding_50 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="membership-description">
                    <h2>Order Online </h2>
                    <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                    <a href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** CTA Area End ***** -->

<!-- ***** Our Team Area Start ***** -->
<!--    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                     Heading Text
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-1.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Jackson Nash</h4>
                            <p>Tax Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-2.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Alex Manning</h4>
                            <p>CEO-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-3.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Ollie Schneider</h4>
                            <p>Business Planner</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/team-img/team-4.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Roger West</h4>
                            <p>Financer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<!-- ***** Our Team Area End ***** -->

<!-- ***** Contact Us Area Start ***** -->
<section class="footer-contact-area section_padding_100 clearfix" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Get in touch with us!</h2>
                    <div class="line-shape"></div>
                </div>
                <div class="footer-text">
                    <p>Certain content is the property of ADT and used under license. The ADT and ADT Authorized Dealer
                        logos are registered trademarks of ADT Services AG and are used under license. Videos are used
                        with permission.</p>
                </div>
                <div class="address-text">
                    <p><span>Address:</span> One Yonge Street, Suite 1801, Toronto, Ontario, M5E 1W7</p>
                </div>
                <div class="phone-text">
                    <p><span>Phone:</span> +1-888-808-9642 </p>
                </div>
                <div class="email-text">
                    <p><span>Email:</span> support@mhbsecurity.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Form Start-->
                <div class="contact_from">
                    <form action="#" method="post">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                               placeholder="Your Name" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Your E-mail" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                                  placeholder="   Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <button type="submit" class="btn submit-btn">Send Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- ***** Contact Us Area End ***** -->

