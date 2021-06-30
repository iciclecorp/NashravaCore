 <header class="header" >
          
            <!-- End of HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content" >
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                    </div>
                    <div style="background-color: black;height:50px;"></div>
                    <div class="header-center" >
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <img src="<?php echo e(asset('public/frontend')); ?>/logo/nasrava_orange.png" alt="logo" style="width:140px;height:80px" />
                        </a>
                        <!-- End of Logo -->
                        <nav class="main-nav" >
                            <ul class="menu"  style="padding-left:100px">
                               <!--  <li class="active">
                                    <a  href="">Home</a>
                                </li> -->
                                <!--  <li class="active">
                                    <?php if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL): ?>
                                      <li><a href="<?php echo e(route('customer.checkout')); ?>">Checkout</a></li>
                                      <?php elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL): ?>
                                      <li><a href="<?php echo e(route('customer.payment')); ?>">Checkout</a></li>
                                      <?php else: ?>
                                      <li><a href="<?php echo e(route('customer.login')); ?>">Checkout</a></li>
                                      <?php endif; ?>
                                </li> -->
                                <li><a href="<?php echo e(route('product.list')); ?>">Products</a></li>
                               <!--  <li><a href="#">Cart</a></li> -->
                                <li >
                                    <a  href="#">Categories</a>
                                    <ul class="sub-menu">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('category.wise.product',$category->id)); ?>"><?php echo e($category->category_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                 <li >
                                    <a  href="#">Brands</a>
                                    <ul class="sub-menu">
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('brand.wise.product',$brand->id)); ?>"><?php echo e($brand->brand_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="#">Blog</a>
                                   
                                </li>
            
                            </ul>
                        </nav>
                        <span class="divider"></span>
                        <!-- End of Divider -->
                        <div class="header-search hs-toggle">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                           <!--  <form class="form-inline" action="#" method="get">
                        
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit"  class="btn btn-secondary">Search</button>
                                </div>
                            </div>
                        </form> -->
                            <form action="<?php echo e(route('search')); ?>" class="input-wrapper" method="get">
                                <input type="text" class="form-control" name="search" autocomplete="on"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                    <div class="header-right">
                        <?php if(@Auth::user()->id != Null): ?>
                        <a class="login" href="<?php echo e(route('dashboard')); ?>">
                            <i class="d-icon-user"></i>
                            <span><?php echo e(@Auth::user()->name); ?></span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                        </form>
                        <?php else: ?>
                        <a class="login" href="<?php echo e(route('customer.login')); ?>">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                        <?php endif; ?>
                        <!-- End of Login -->
                        <span class="divider"></span>
                        <?php
                            $contents = Cart::content();
                            $count = Cart::count();
                            $total = 0;
                            $sum = 0;
                           
                        ?>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                     <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php
                                       $sum +=  $content->subtotal;
                                     ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <span class="cart-price">BDT.<?php echo e($sum); ?></span>
                                    
                                </span>

                                <i class="minicart-icon">
                                    <span class="cart-count"><?php echo e($count); ?></span>
                                </i>
                            </a>
                            <!-- End of Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts"><?php echo e($count); ?> items</span>
                                    <span><a href="#">View cart</a></span>
                                </div>
                                <div class="products scrollable">
                                     <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name"><?php echo e($content->name); ?></a>
                                            <div class="price-box">
                                                <span class="product-quantity"><?php echo e($content->qty); ?></span>
                                                <span class="product-price"><?php echo e($content->price); ?></span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="<?php echo e(route('delete.cart',$content->rowId)); ?>">
                                                <img src="<?php echo e($content->options->image); ?>" alt="product" width="90"
                                                    height="90" />
                                            
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                            </a>
                                        </figure>
                                    </div>
                                    <?php
                                       $total += $content->subtotal;
                                       $count ++;
                                    ?>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Total:</label>
                                    <span class="price"><?php echo e($total); ?></span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                        
                                     <?php if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL): ?>
                                     <a href="<?php echo e(route('customer.checkout')); ?>" class="btn btn-dark"><span>Checkout</span></a>
                                      <?php elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL): ?>
                                     <a href="<?php echo e(route('customer.payment')); ?>" class="btn btn-dark"><span>Checkout</span></a>
                                      <?php else: ?>
                                     <a href="<?php echo e(route('customer.login')); ?>" class="btn btn-dark"><span>Checkout</span></a>
                                      <?php endif; ?>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                       

                        <div class="header-search hs-toggle mobile-search">
                           
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button style="background-color:#fd7e14;"  type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                </div>
            </div>
                     <style>
           .menu li a,.search-toggle i,.header-right a,.cart-price,.menu .active>a:not(.menu-title),.cart-dropdown .cart-count,.minicart-icon,.product-name a,.category-name a{
               color:#000000 !important;
    
   
            }
            .menu li a:hover,.header-right a:hover,.cart-price:hover{
                
                color: #F36523 !important;
            }
            .btn-quickview,.cart-dropdown .cart-toggle i:hover,.cart-dropdown .cart-toggle i:hover .cart-count,.header-search .btn-search{
                 background: #F36523 !important;
                 color:#ffffff !important;
            }
                .category-default.category-default-1 .category-content:hover,.category-default.category-default-1 .category-content:hover a{
                    background: #F36523 !important;
                 color:#ffffff !important;
                }

                .footer-middle a,.social-links a{
                    color:#ffffff;
                }
                
                
                .owl-theme .owl-dots .owl-dot.active span{
                 background: #F36523 !important;
                 border-color:#F36523 !important;
                }
                
                .cart-dropdown .cart-action .btn{
                 background: #F36523 !important;
                 color:#ffffff !important;
                 border-color:#F36523 !important;
            }
            </style>
        </header><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/layout/header.blade.php ENDPATH**/ ?>