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
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/sweetalert2/sweetalert2.min.css') }}">

		<!-- modernizr css -->
        <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        @yield('css')
		<style>
		
		.products-gridview-inner .single-product .product-thumb img{
			height:320px !important;
		}
		.view-more{
			background: #F36523 none repeat scroll 0 0;
    border-radius: 12px;
    color: #ffffff !important;
    display: inline-block;
   
    height: 35px;
    line-height: 26px;
    margin-right: 8px;
    padding: 5px 20px
		}
		.p-short-des{
    content: "\a";
    white-space: pre-line;
   
}
.mobileyes{
	display:none !important;
}
		@media only screen and (max-width: 600px) {
			#new-products-area .products-gridview-inner .single-product .product-thumb img{
			height:170px !important;
		}
		
		#best-seller-area .products-gridview-inner .single-product .product-thumb img{
			height:170px !important;
		}

		.mobileyes{
	display:block !important;
}

.mobileno{
	display:none !important;
}
.cart-inner.header-cart{
	width:70px !important;
}
		}
		</style>
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
	<script src="{{ asset('public/backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

	<!-- main js -->
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script>
/*			function target_popup(form) {
    window.open('', 'formpopup', 'width=1200,height=700,resizeable,scrollbars');
    form.target = 'formpopup';
}*/
		$(function () {
                    
                    var id = $(this).data("id");
                    
                    var fieldArray = [];
                    var $this = $(this);
                    var cpid=JSON.parse(sessionStorage.getItem('cpids'))
var  clickCounter = sessionStorage.getItem('clickCounter')
   clickCounter = clickCounter ? parseInt(clickCounter) : 0;
   //clickCounter = clickCounter || 0
   $('.compare').text(clickCounter);
   $('#cpid').val(cpid);

    $( ".comp" ).click(function(){
   //var clickCounter = $this.data('clickCounter') || 0;
   // here you know how many clicks have happened before the current one
  
   clickCounter++;
   //$(this).data('clickCounter', clickCounter);
		if(clickCounter){
			Swal.fire({
        text: 'Added to Compare',
		type: 'success',
		timer: 2000,
		showCancelButton: false,
  showConfirmButton: false
        
      })

		if(!cpid){
			fieldArray.push($(this).data("id"));


		}
		else{
			fieldArray.push(cpid);
			fieldArray.push($(this).data("id"));


		}
		var compare=fieldArray.length;

        $('.compare').text(clickCounter);
		$('#cpid').val(fieldArray);
        
		sessionStorage.setItem("clickCounter",clickCounter);
        sessionStorage.setItem('cpids', JSON.stringify(fieldArray))


		}
        

              
                      
                    });


		});

	


		</script>
    </body>
</html>
