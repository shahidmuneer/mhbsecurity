@extends("home-layouts.app")
@section('carousel')

@include('home-layouts.carousel')

@endsection

@section('content')
<style>
    .box ul{
        list-style-image: url('/img/core-img/tick.png');
        margin-left:16px;
    }
</style>
<div class="container bg-white" id="features" style="padding-top:30px;">
    <div class="row">
        <div class="col-12">
            <!-- Heading Text -->
            <div class="section-heading text-center">
                <h2>Packages</h2>
                <div class="line-shape"></div>
            </div>
        </div>
    </div>
</div>
    <div class="container bg-white">
        <div class="row">
        <!--Card-->
        @for($i=0;$i<0;$i++)
            <div class="col-lg-4 col-sm-12 col-12 wow fadeInDown" style="padding:10px;">
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

        @foreach($packages as $package)
            <div style='padding-bottom: 14px;' class="col-lg-4 col-sm-12 offset-lg-0 offset-sm-0  box wow fadeInUp">
                <div class="box-head pull-left">
                {{$package->name}}
                </div>
                <div class="col-lg-12 col-sm-12 col-12 box-body pull-left">
                    <div class=" box-content text-center" >
                        <img width="194" height="90" alt="{{$package->picture_description}}" src="/uploads/packages/{{$package->picture}}">
                        <div class="clearfix"></div>
                                <p><label><b>PACKAGE ID:</b></label> {{$package->package_id}}</p>
<!--<p>{{$package->comes_with}}</p>
                        <p style="color:red;">{{$package->importance}}</p>
                           -->
                    </div>
                </div>
               
                <div class='col-lg-12 col-sm-12 col-12 box-footer pull-right'>
                    <div style='padding:10px; background:#f2f2f2;'>   
                    {!!$package->details!!}
                    </div>
                </div>
                 <center>
                    <a style="box-shadow:1px -45px 28px 2px midnightblue;" href="#" ></a></center>
                    
            </div>
       
        

        @endforeach
    </div>
    </div>


@endsection