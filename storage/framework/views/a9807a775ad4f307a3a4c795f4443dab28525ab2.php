 
 <?php $__env->startSection('content'); ?>
 <?php echo $__env->make('frontend.layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- Start Category Search Bar -->
    <div class="cartegory-search-bar last-in2">
        <div class="container">
            <div class="row">
                <div class="hidden-xs col-sm-4 col-sm-4 col-md-3"> 
                    <!-- Start Category Menu Area -->
                    <div class="category-menu-area"> 
                        <ul class="category-menu">
                            <li><span class="cat-heading">categories</span>
                                <ul class="cat-toggle">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <li class="arrow">
                                        <a href="<?php echo e(route('category.wise.product',$category->id)); ?>"><i class="fa fa-minus" aria-hidden="true"></i> <?php echo e($category->category_name); ?></a>
                                        <!--  MEGA MENU START -->
                                        <?php 
                                         $subcategories=App\Model\SubCategory::where('category_id',$category->id)->get();
                                       ?>
                                     <div class="cat-mega-drop-menu">

                                            <div class="single-cat-menu-item">
                                              
                                                <ul>
                                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      


                                                    <li><a href="<?php echo e(route('category.wise.product',$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </li>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <!-- End Category Menu Area -->
                </div>
                <div class="col-xm-12 col-sm-8 col-md-6 col-md-offset-3"> 
                    <!-- Start Serach Box Area -->
                    <div class="search-box-area"> 
                        <form action="#">
                            <input type="search" class="cat-search-box" name="googlesearch" placeholder="Enter search your key" >
                            <i class="fa fa-search"></i>
                        </form>					    
                    </div>
                    <?php
                            $contents = Cart::content();
                            $count = Cart::count();
                            $total = 0;
                            $sum = 0;
                           
                        ?>
                    <!-- End Serach Box Area -->
                    <div class="nav-cart-area"> 
                        <div class="cart-inner">
                            <a class="backet-area"><span class="added-total"><?php echo e($count); ?></span></a>	
                            <div class="cart-items-area"> 
                                <ul class="cart-items"> 
                                <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                       $sum +=  $content->subtotal;
                                     ?>
                                    <li>
                                        <a href="#" class="prodcut-thumb"><img src="<?php echo e(asset($content->image)); ?>" alt="" /></a>
                                        <div class="item-details"> 
                                            <a href="#" class="item-name"><?php echo e($content->name); ?></a>
                                            <span class="item-quantity">QTY: <?php echo e($content->qty); ?></span>
                                            <span class="item-price"><?php echo e($content->price); ?></span>
                                            <span class="item-remove-btn"><a href="#"><i class="fa fa-trash"></i></a></span>
                                        </div>
                                    </li>
                                     <?php
                                       $total += $content->subtotal;
                                       $count ++;
                                    ?>
                                   	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>										 
                                </ul>
                               <!-- <p class="cart-total">Shiping <span class="amount">$5.00</span></p>-->
                                <p class="cart-total total">Total <span class="amount"><?php echo e($total); ?></span></p>
                                <span>
                                    
                                <?php if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL): ?>
                                     <a href="<?php echo e(route('customer.checkout')); ?>" class="btn-checkout"><span>Checkout</span></a>
                                      <?php elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL): ?>
                                     <a href="<?php echo e(route('customer.payment')); ?>" class="btn-checkout"><span>Checkout</span></a>
                                      <?php else: ?>
                                     <a href="<?php echo e(route('customer.login')); ?>" class="btn-checkout"><span>Checkout</span></a>
                                      <?php endif; ?>
                            
                            
                            
                            </span>
                            </div>		
                        </div>									
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Category Search Bar -->
    <!-- Start Quick Category Area -->
    <div id="quick-category-area" class="padtop20 padbot25">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"> 
                    <!-- Start Single Category Item -->
                    <div class="single-category-item last-in">  
                        <div class="category-thumb">
                            <img src="img/category-thumbs/4.png" alt="" />
                            <a href="#" class="btn-lucian">Shoes</a>
                        </div>
                    </div>
                    <!-- End Single Category Item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> 
                    <!-- Start Single Category Item -->
                    <div class="single-category-item">  
                        <div class="category-thumb">
                            <img src="img/category-thumbs/5.png" alt="" />
                            <a href="#" class="btn-lucian">Men</a>
                        </div>
                    </div>
                    <!-- End Single Category Item -->
                </div>
                <div class="clearfix hidden-sm"></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> 
                    <!-- Start Single Category Item -->
                    <div class="single-category-item">  
                        <div class="category-thumb">
                            <img src="img/category-thumbs/6.png" alt="" />
                            <a href="#" class="btn-lucian">Bags</a>
                        </div>
                    </div>
                    <!-- End Single Category Item -->
                </div>	
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"> 
                    <!-- Start Single Category Item -->
                    <div class="single-category-item last-in3">  
                        <div class="category-thumb">
                            <img src="img/category-thumbs/7.png" alt="" />
                            <a href="#" class="btn-lucian">Bags</a>
                        </div>
                    </div>
                    <!-- End Single Category Item -->
                </div>	
            </div>
        </div>
    </div>
    <!-- End Quick Category Area -->
    <!-- Start New Products -->
    <section id="new-products-area" class="padtop20 padbot25 lst">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="section-title title-box">
                        <h2>What's New</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="new-product-carousel" class="owl-controls-1">

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                       <!-- Start Single Prodcut -->
                       <div class="single-product">
                            <!-- Start Product Thumbnail -->
                            <div class="product-thumb-area">
                                <!-- Start Product Image -->
                                <div class="product-thumb">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>"><img src="<?php echo e(asset($product->image)); ?>" alt="product" /></a>
                                    <!--<span class="product-new">New</span>
                                    <span class="product-Sale">Sale</span>-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Hidden Info -->
                                <div class="product-hidden-info">
                                    <!-- Quick View -->
                                    <div class="quick-view">
                                        <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="modal-view detail-link quickview" ><i class="fa fa-eye"></i>View Details</a> 
                                    </div>
                                    <!-- End Quick View -->
                                  
                                </div>
                                <!-- End Product Hidden Info -->
                            </div>
                            <!-- End Product Thumbnail -->
                           
                            <!-- Start Product Info -->
                            <div class="product-short-info"> 
                                <!-- Start product short description -->
                                <p class="p-short-des"><a href="<?php echo e(route('product.details',$product->slug)); ?>"><?php echo e($product->title); ?></a></p>
                                <!-- End product short description -->
                                
                            </div>
                            <!-- End Product Info -->
                            <!-- Start Prodcut Price Area -->
                            <div class="product-price-area"> 
                                   <?php
                                     $price = $product->price - $product->discount;
                                   ?>
                                <span class="price">
                                    <span class="amount">BDT. <?php echo e($price); ?></span><?php if($product->discount): ?> <span><del><?php echo e($product->price); ?></del></span><?php endif; ?>
                                </span>
                                <span class="add-to-cart"><a href="<?php echo e(route('product.details',$product->slug)); ?>"><i class="fa fa-eye" aria-hidden="true"></i>View Details</a></span>
                            </div>
                            <!-- End Prodcut Price Area -->
                       </div>
                       <!-- End Single Prodcut -->
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- End New prodcut carousel -->
            </div>
        </div>
    </section>
    <!-- End New Products -->
    <!-- Start Best Seller -->
    <section id="best-seller-area" class="padtop30 padbot25">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <!-- Start Section Title -->
                    <div class="section-title title-box">
                        <h2>Best Seller</h2>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <!-- Start Best seller carousel -->
                <div id="best-seller-carousel" class="owl-controls-1">
                 <?php $__currentLoopData = $best_sell_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>				 
                    <div class="col-md-3">
                       <!-- Start Single Prodcut -->
                       <div class="single-product">
                            <!-- Start Product Thumbnail -->
                            <div class="product-thumb-area">
                                <!-- Start Product Image -->
                                <div class="product-thumb">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>"><img src="<?php echo e(asset($product->image)); ?>" alt="product" /></a>
                                   <!-- <span class="product-new">New</span>							  
                                    <span class="product-Sale">Sale</span>-->
                                </div>
                                <!-- End Product Image -->
                                <!-- Start Product Hidden Info -->
                                <div class="product-hidden-info">
                                    <!-- Quick View -->
                                    <div class="quick-view">
                                        <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="modal-view detail-link quickview"><i class="fa fa-eye"></i>View Details</a>
                                    </div>
                                    <!-- End Quick View -->
                                    <!-- Start Wish List  -->
                                    <!-- <div class="wish-list-area"> 
                                        <a href="#" class="wish-list"><i aria-hidden="true" class="fa fa-heart-o"></i> Wish List</a>
                                        <a href="#" class="compare"><i aria-hidden="true" class="fa fa-exchange"></i> Compare</a>
                                    </div> -->
                                    <!-- End Wish List  -->
                                </div>
                                <!-- End Product Hidden Info -->
                            </div>
                            <!-- End Product Thumbnail -->
                            <!-- Start Product Info -->
                            <div class="product-short-info"> 
                                <!-- Start product short description -->
                                <p class="p-short-des"><a href="<?php echo e(route('product.details',$product->slug)); ?>"><?php echo e($product->title); ?></a></p>
                                <!-- End product short description -->
                                
                            </div>
                            <!-- End Product Info -->
                            <!-- Start Prodcut Price Area -->
                            <div class="product-price-area"> 
                                <span class="price">
                                    <?php
                                     $price = $product->price - $product->discount;
                                    ?>
                                    <span class="amount">BDT. <?php echo e($price); ?></span> <?php if($product->discount): ?> <span><del><?php echo e($product->discount); ?></del></span><?php endif; ?>
                                </span>
                                <span class="add-to-cart"><a href="<?php echo e(route('product.details',$product->slug)); ?>"><i class="fa fa-eye"></i>View Details</a></span>
                            </div>
                            <!-- End Prodcut Price Area -->
                        </div>
                        <!-- End Single Prodcut -->
                    </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   			
                </div>
                <!-- End Best seller carousel -->
            </div>
        </div>
    </section>
    <!-- End Best Seller -->
    <!--Start Offer -->
    
    <!-- Start Ads Area -->
    <div id="ads-area" class="padtop20 padbot35">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="ads-inner"> 
                        <!-- Start Single Ad -->
                        <div class="single-ad"> 
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>0(123) 456 789</h3>
                        </div>
                        <!-- End Single Ad -->
                        <!-- Start Single Ad -->
                        <div class="single-ad"> 
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h3>working time</h3>
                        </div>
                        <!-- End Single Ad -->
                        <!-- Start Single Ad -->
                        <div class="single-ad"> 
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <h3>Free shipping</h3>
                        </div>
                        <!-- End Single Ad -->
                        <!-- Start Single Ad -->
                        <div class="single-ad"> 
                            <i class="fa fa-history" aria-hidden="true"></i>
                            <h3>Money back 100%</h3>
                        </div>
                        <!-- End Single Ad -->					  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ads Area -->
    <!-- Start Blog Area -->
    
    <!-- End Blog Area -->
    <!-- Start Testimonial Area -->
    <section id="testimonial-area" class="padtop75 padbot45">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <!-- Start Testimonial Title -->
                    <div class="testmonila-title"> 
                        <h4>WHAT THEY SAY</h4>
                        <p>Client testimonial</p>
                    </div>
                    <!-- End Testimonial Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <!-- Start Testimonial Inner -->
                    <div class="testimonial-inner">
                        <div id="testimonial-carousel">
                            <!-- Start Single Testimonial -->
                            <div class="single-testimonila">
                                <!-- Start Testimonial Thumb -->
                                <div class="testimonial-thumb"> 
                                    <img class="img-circle" src="<?php echo e(asset('public/frontend/img/testimonials/1.jpg')); ?>" alt="" />
                                </div>
                                <!-- End Testimonial Thumb -->
                                <!-- Start Testimonial Quote -->
                                <div class="testimonial-quote"> 
                                    <h4 class="author-info"><span>lucian</span> - designer</h4>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                                </div>
                                <!-- End Testimonial Quote -->
                            </div>
                            <!-- End Single Testimonial -->		
                            <!-- Start Single Testimonial -->
                            <div class="single-testimonila">
                                <!-- Start Testimonial Thumb -->
                                <div class="testimonial-thumb"> 
                                    <img class="img-circle" src="<?php echo e(asset('public/frontend/img/testimonials/1.jpg')); ?>" alt="" />
                                </div>
                                <!-- End Testimonial Thumb -->
                                <!-- Start Testimonial Quote -->
                                <div class="testimonial-quote"> 
                                    <h4 class="author-info"><span>lucian</span> - designer</h4>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                                </div>
                                <!-- End Testimonial Quote -->
                            </div>
                            <!-- End Single Testimonial -->	
                        </div>
                    </div>
                    <!-- End Testimonial Inner -->
                </div>
            </div>
        </div>
    </section>

    <!-- End Testimonial Area -->
    
    

<?php $__env->stopSection(); ?>    
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/layouts/home.blade.php ENDPATH**/ ?>