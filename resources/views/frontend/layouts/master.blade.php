<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nashrava</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/favicon.ico')}}">

        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,500italic,600italic,600,700,700italic,900,300' rel='stylesheet' type='text/css'>	
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>	

		<!-- All CSS Here -->
		<!-- Bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" href="{{asset('public/frontend/custom-slider/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('public/frontend/custom-slider/css/preview.css')}}" type="text/css" media="screen" />	
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">	
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('public/frontend/style.css')}}">
		<link rel="stylesheet" href="{{asset('public/frontend/css/colors.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        @yield('css')
    </head>
    <body class="home2">
	<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
   @include('frontend.layouts.header')
   @yield('content')
   @include('frontend.layouts.mobile-view')
   @include('frontend.layouts.footer')
   	
   @yield('js')		  
	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<!-- Nivo slider js --> 		
	<script src="{{asset('public/frontend/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
	<script src="{{asset('public/frontend/custom-slider/home.js')}}" type="text/javascript"></script>	
	<!-- owl.carousel js -->
	<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
	<!-- meanmenu js -->
	<script src="{{asset('public/frontend/js/jquery.meanmenu.js')}}"></script>
	<!-- jquery-ui js -->
	<script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>		
	<!-- wow js -->
	<script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
	<!-- plugins js -->
	<script src="{{asset('public/frontend/js/plugins.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
    </body>
</html>
