<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Nashrava</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Nashrava eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
     <script src="<?php echo e(asset('public/frontend')); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/demo1.min.css">
   
    <?php echo $__env->yieldContent('css'); ?>
    
</head>

<body class="home">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <h1 class="d-none">Nashrava eCommerce HTML Template</h1>


     <?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <?php echo $__env->yieldContent('content'); ?>
     
     </div>
     <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
      

      <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="<?php echo e(url('/')); ?>

" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
         <?php if(@Auth::user()->id != Null): ?>
        <a href="<?php echo e(route('dashboard')); ?>" class="sticky-link">
            <i class="d-icon-user"></i>
            <span><?php echo e(@Auth::user()->name); ?></span>
        </a>
        <?php else: ?>
        <a  class="sticky-link" href="<?php echo e(route('customer.login')); ?>">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <?php endif; ?>
        <div class="dropdown cart-dropdown dir-up">
            <a href="<?php echo e(route('show.cart')); ?>" class="sticky-link cart-toggle">
                <i class="d-icon-bag"></i>
                <span>Cart</span>
            </a>
           
            </div>
            <!-- End of Dropdown Box -->
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li class="active">
                    <a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                     <?php if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL): ?>
                      <li><a href="">Checkout</a></li>
                      <?php elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL): ?>
                      <li><a href="">Checkout</a></li>
                      <?php else: ?>
                      <li><a href="">Checkout</a></li>
                      <?php endif; ?>
                <li>
                    <a href="#">Shop</a>
                    <ul>
                      <li><a href="<?php echo e(route('product.list')); ?>">Products</a></li>
                     
                      <li><a href="<?php echo e(route('show.cart')); ?>">Cart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Categories</a>
                    <ul class="sub-menu">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('category.wise.product',$category->id)); ?>"><?php echo e($category->category_name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </ul>
                </li>
                <li>
                    <a href="#">Brands</a>
                    <ul class="sub-menu">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('brand.wise.product',$brand->id)); ?>"><?php echo e($brand->brand_name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                  
                </li>
            </ul>
            <!-- End of MobileMenu -->
            <!-- <ul class="mobile-menu mmenu-anim">
                <li><a href="login.html">Login</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
            </ul> -->
            <!-- End of MobileMenu -->
        </div>
    </div>

    <?php echo $__env->yieldContent('js'); ?>
    <!-- Plugins JS File -->
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/parallax/parallax.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
   <!--  <script src="<?php echo e(asset('public/frontend')); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->

    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="<?php echo e(asset('public/frontend')); ?>/js/main.js"></script>
</body>

</html><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/layout/master.blade.php ENDPATH**/ ?>