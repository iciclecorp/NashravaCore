<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nashrava</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/frontend/img/favicon.ico')); ?>">

        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,500italic,600italic,600,700,700italic,900,300' rel='stylesheet' type='text/css'>	
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>	

		<!-- All CSS Here -->
		<!-- Bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('public/frontend/custom-slider/css/nivo-slider.css')); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo e(asset('public/frontend/custom-slider/css/preview.css')); ?>" type="text/css" media="screen" />	
		<!-- animate css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/animate.css')); ?>">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/jquery-ui.min.css')); ?>">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/meanmenu.min.css')); ?>">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/owl.carousel.css')); ?>">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/font-awesome.min.css')); ?>">	
		<!-- style css -->
		<link rel="stylesheet" href="<?php echo e(asset('public/frontend/style.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/colors.css')); ?>">
		<!-- responsive css -->
		<link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/sweetalert2/sweetalert2.min.css')); ?>">

		<!-- modernizr css -->
        <script src="<?php echo e(asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body class="home2">
	<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
   <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->yieldContent('content'); ?>
   <?php echo $__env->make('frontend.layouts.mobile-view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   	
   <?php echo $__env->yieldContent('js'); ?>		  
	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="<?php echo e(asset('public/frontend/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
	<!-- bootstrap js -->
	<script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
	<!-- Nivo slider js --> 		
	<script src="<?php echo e(asset('public/frontend/custom-slider/js/jquery.nivo.slider.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo e(asset('public/frontend/custom-slider/home.js')); ?>" type="text/javascript"></script>	
	<!-- owl.carousel js -->
	<script src="<?php echo e(asset('public/frontend/js/owl.carousel.min.js')); ?>"></script>
	<!-- meanmenu js -->
	<script src="<?php echo e(asset('public/frontend/js/jquery.meanmenu.js')); ?>"></script>
	<!-- jquery-ui js -->
	<script src="<?php echo e(asset('public/frontend/js/jquery-ui.min.js')); ?>"></script>		
	<!-- wow js -->
	<script src="<?php echo e(asset('public/frontend/js/wow.min.js')); ?>"></script>
	<!-- plugins js -->
	<script src="<?php echo e(asset('public/frontend/js/plugins.js')); ?>"></script>
	<script src="<?php echo e(asset('public/backend/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

	<!-- main js -->
	<script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>
	<script>
			function target_popup(form) {
    window.open('', 'formpopup', 'width=1200,height=700,resizeable,scrollbars');
    form.target = 'formpopup';
}
		$(function () {
                    
                    var id = $(this).data("id");
                    
                    var fieldArray = [];
                    var $this = $(this);
                    var cpid=JSON.parse(localStorage.getItem('cpids'))
var  clickCounter = localStorage.getItem('clickCounter')
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
        
		localStorage.setItem("clickCounter",clickCounter);
        localStorage.setItem('cpids', JSON.stringify(fieldArray))


		}
        

              
                      
                    });


		});
		</script>
    </body>
</html>
<?php /**PATH F:\xampp\htdocs\NashravaCore\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>