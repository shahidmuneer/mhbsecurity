<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MHB Security</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-12 col-lg-10">
                    
                </div>
        </div>
    </div>
    <!-- ***** Header Area Start ***** -->

    <header class="header_area animated blue darken-4" >
        <div class="container">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area ">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">ADT</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#welcome">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Advantages</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Products</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
                <!-- Signup btn -->
                
                <div  class="col-12 col-lg-2">
                    <div id="welcome" class="sing-up-button d-none d-lg-block">
                       
                                               
                    </div>
                </div>
            </div>
      
    </header>

    <!-- ***** Header Area End ***** -->
    
<div id="carosel-top">
    <!-- ***** Wellcome Area Start ***** -->
    <div id="carouselExampleIndicators"  class="clearfix carousel slide" data-ride="carousel">
  <ol class="carousel-indicators"  >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.apex-chemicals.com/image/slider/slider2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.metaslider.com/wp-content/uploads/2014/11/mountains1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.hupx.hu/HeaderPictures/Hupx_slider_HUDEX_V3.jpg" alt="Third slide">
    </div>
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
</div>
    
    
    <div class="section_padding_50_20 well-lg well bg-white" id="about" style="border-top:6px solid green; padding-top:50px; padding-bottom: 50px; ">
        <div class="container  wow fadeInUp" style="">
    <div class="products-carousal">
        @for($i=0;$i<10;$i++)
        <div>
         
             
        <div class="card hoverable">
      <div class="container">
  <div class="row">
            <div class="col-sm-6">
                <img height="150"  src="http://www.mhbsecurity.com/keypad.JPG" >
           </div>
            <div class="col-sm-5">
                
           This is what we wanted
           <a href="#">...more</a>
            </div>
  </div>
      
      </div>
     
       
    </div>
        
        </div>
        @endfor
    </div>
    </div>
       
    </div>
		
    
    <div class=" col-lg-4 offset-lg-7 col-md-12 main-text hidden-xs" style="padding-top:34px;">
                <div class="  text-center">
                   <section class="form-elegant">

    <!--Form without header-->
    <div class="card  wow fadeInUp">
        <div class="text-center blue darken-4 " >
                <h5 class=" mb-5 " style="color:white; margin-top:5px; "><strong>FREE HOME Security Review</strong></h5>
            </div>
        <div class="card-body col-md-12">

            <!--Header-->
            
   <div class="form-group">
                     
       
    	<div class="col-md-12">		
       <div class="input-group">
                    <div class="col-md-3">
                   
           <label for="happy" >Home Owner?</label>
                    </div>
           <div class="col-md-5">
           
       
           <!-- Switch -->

<!-- Normal switch -->
<div class="form-group">
  <span class="switch">
    <label for="switch-normal">Yes</label>
      <input type="checkbox" class="switch" id="switch-normal">
    <label for="switch-normal">No</label>
  </span>
</div>
           </div>
            </div>
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
                <button type="button" class="btn blue darken-4 btn-rounded">GET A FREE QUOTE</button>    </div>
            

        </div>

        

    </div>
    <!--/Form without header-->

</section>
                
                </div>
            </div>
     
    
    <!-- ***** Wellcome Area End ***** -->
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 text-center banner-under-home" >
                <p>This is banner on the home page and this won't be very well too</p>
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
          <li>Free* $1,450 Value ADT® Monitored Home Security Alarm System with Free Activation </li>
          <li>Three Coupons of 3 Days & 2 Night Hotel Stay Vacation for CAA Members or Visa Card Holders (Learn More)</li>

          <li>Free High Resolution Color Surveillance Camera with Night Vision & Remote View from World Wide, Free in all Camera Pkgs.</li>

          <li>24/7 Immediate emergency Police, Fire and Medical response</li>

          <li>May save up to 25% on your Homeowners Insurance</li>

          <li>ADT Security $500 Theft Protection Guarantee, System for Life Guarantee, Free Maintenance on Parts & Labour as long as you stay with ADT</li>

          <li>ADT Canada Money-Back Service Guarantee (certain restrictions apply)</li>
      </ul>
      </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
      
       <div id="menu3" class="container tab-pane fade"><br>
      <h3>Menu 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
    </div>
            
                       
                 <!-- ***** Special Area Start ***** -->
        
    
    <div class="col-lg-6 col-sm-12" style='padding-top:10px;'>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="http://www.mhbsecurity.com/new_IP_Cam_Header.gif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="http://www.mhbsecurity.com/new_IP_Cam_Header.gif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="http://www.mhbsecurity.com/new_IP_Cam_Header.gif" alt="Third slide">
    </div>
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
      
            <div class="container bg-white" id="features">
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
@for($i=0;$i<6;$i++)
<div class="col-lg-4 wow fadeInDown" style="padding:10px;">
    <div class="card">
        <!--Panel-->
<div class="card hoverable">
    <h3 class="card-header primary-color white-text text-center" style="padding-bottom:40px;">Featured</h3>
    <div class="card-body" style="padding:10px;">
        <div class="bg-white" style="margin-top:-41px;">
            <div class="view overlay hm-white-slight" style="padding:10px;">
        <img src="http://www.mhbsecurity.com/2009050911471198.jpg" class="img-fluid" alt="">
        <a href="#">
            <div class="mask"></div>
        </a>
    </div>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a class="btn btn-primary">See More</a>
        </div>
    </div>
</div>
<!--/.Panel-->
                    
                </div>
              </div>
@endfor
                </div>
        </div>
    
    
     <!-- ***** Awesome Features Start ***** -->
   
    <!-- ***** Awesome Features End ***** -->

            
   
        <!-- Special Description Area -->
        <section class="special_description_area p-t-20"  style=" background-position:center; background-image: url(/img/core-img/background-home.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/core-img/landing-first.png" class="wow fadeInDown" style="margin-bottom:-50px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto wow fadeInUp">
                        <div class="special_description_content white-text">
                            <h2 class="white-text">When You Choose MHB & ADT, You Are in Good Company</h2>
                            <p class="white-text">Let us provide you with the peace of mind that comes from knowing that the #1 security company in North America is helping protect your home and family, 24 hours a day, 7 days a week. For over 136 years, ADT has been the most respected name in the security business.</p>
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
         <a href="#next3">    
            <div class="container arrow-ract" >
                <div class="arrow-down text-center ">
                    <i class="ti-download white-text fa-3x"></i></div>
            </div>
         </a>
            </div>
        </section>
        
        
        
       
    <!-- ***** Special Area End ***** -->

    <section class="special_description_area bg-white p-t-20" id="next3"  >
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 col-xl-5 ml-xl-auto wow fadeInRight">
                        <div class="special_description_content ">
                            <h2 >When You Choose MHB & ADT, You Are in Good Company</h2>
                            <p >Let us provide you with the peace of mind that comes from knowing that the #1 security company in North America is helping protect your home and family, 24 hours a day, 7 days a week. For over 136 years, ADT has been the most respected name in the security business.</p>
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
                    <div class="col-lg-6">
                        <div class="special_description_img ">
                            <img src="img/bg-img/special.png" class="wow fadeInDown" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <div class="ract">
         <a href="#next2">    
            <div class="container arrow-ract" >
                <div class="arrow-down text-center ">
                    <i class="ti-download fa-3x"></i></div>
            </div>
         </a>
        </div>
        </section>
    
    
    
    
    
    
    
    
    
    
     <section class="special_description_area p-t-20" id="next2" style=" background-position:center; background-image: url(https://i.pinimg.com/originals/5d/5e/02/5d5e02025ed06f89435ca5e7bde36ecf.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/welcome-img.png" class="wow fadeInRight" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content wow fadeInUp">
                            <h2 >When You Choose MHB & ADT, You Are in Good Company</h2>
                            <p >Let us provide you with the peace of mind that comes from knowing that the #1 security company in North America is helping protect your home and family, 24 hours a day, 7 days a week. For over 136 years, ADT has been the most respected name in the security business.</p>
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
         <div class="container arrow-ract" >
                <div class="arrow-down text-center ">
                    <i class="ti-download white-text fa-3x"></i></div>
            </div>
         </a>
         </div>
        </section>
    
    
    
    
    <section class="special_description_area bg-white p-t-20"  id="next">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 col-xl-5 ml-xl-auto wow fadeInUp">
                        <div class="special_description_content">
                            <h2 >When You Choose MHB & ADT, You Are in Good Company</h2>
                            <p >Let us provide you with the peace of mind that comes from knowing that the #1 security company in North America is helping protect your home and family, 24 hours a day, 7 days a week. For over 136 years, ADT has been the most respected name in the security business.</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.2s">
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
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/special2.png" class="wow fadeInDown" alt="">
                        </div>
                    </div>
                </div>
            </div>
         
        </section>
    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(img/core-img/play3.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
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
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
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
                                <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
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
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
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
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
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
                        <p>Certain content is the property of ADT and used under license. The ADT and ADT Authorized Dealer logos are registered trademarks of ADT Services AG and are used under license. Videos are used with permission.</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> One Yonge Street, Suite 1801, Toronto, Ontario, M5E 1W7</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span>  +1-888-808-9642 </p>
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
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
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
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>ATD</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2018 MHB Security Systems <a href="http://shahidmuneer.com" target="_blank">Shahid</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <script src="js/jquery.malihu.PageScroll2id.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
