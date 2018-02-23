<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MHB Security</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/adt-images/adt-logo.png">

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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" style="width:100%;">
                        <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                        Product Name
                    </h4>
                </div>
                <div class="modal-body">
                    Description
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

  @include('home-layouts.header')
  
  @include('home-layouts.carousel')
    <!-- Sidebar -->
    @yield('content')
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('home-layouts.footer')

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