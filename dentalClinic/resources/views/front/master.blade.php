<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('/')}}front/plugins/slick/slick.css">
  <link rel="stylesheet" href="{{asset('/')}}front/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('/')}}front/plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="{{asset('/')}}front/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('/')}}front/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="{{asset('/')}}front/images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->



<!--header top-->
@include('front.includes.header_top')
<!--header top-->

<!--Header Upper-->
@include('front.includes.header_upper')
<!--Header Upper-->


<!--Main Header-->
@include('front.includes.main_header')
<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->
@yield('body')
<!-- End Contact Section -->

<!--footer-main-->
@include('front.includes.footer')
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{asset('/')}}front/plugins/jquery.js"></script>
<script src="{{asset('/')}}front/plugins/bootstrap.min.js"></script>
<script src="{{asset('/')}}front/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('/')}}front/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="{{asset('/')}}front/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('/')}}front/plugins/google-map/gmap.js"></script>

<script src="{{asset('/')}}front/plugins/validate.js"></script>
<script src="{{asset('/')}}front/plugins/wow.js"></script>
<script src="{{asset('/')}}front/plugins/jquery-ui.js"></script>
<script src="{{asset('/')}}front/plugins/timePicker.js"></script>
<script src="{{asset('/')}}front/js/script.js"></script>
</body>

</html>
