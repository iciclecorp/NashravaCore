
<?php $__env->startSection('content'); ?>
<!-- End of Header -->
        <main class="main">
            <div class="page-content">
                 <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': true,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 8000
                    }">
                       
                          <?php $__currentLoopData = $slider_uppers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $upper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="<?php echo e(asset(
                'public/upload/slider_image/'.$upper->image)); ?>" alt="intro-banner" width="1903"
                                    height="630" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                   
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </div>

                    <div class="service-list container appear-animate">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                'items': 3,
                                'nav': false,
                                'dots': false,
                                'margin': 20,
                                'autoplay': true,
                                'autoplayTimeout': 5000,
                                'responsive': {
                                    '0': {
                                        'items': 1
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3,
                                        'loop': false
                                    }
                                }
                            }">
                            <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                <i class="icon-box-icon d-icon-truck"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Free Shipping &amp; Return</h4>
                                    <p>Free shipping on orders over $99</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                                <i class="icon-box-icon d-icon-service"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Customer Support 24/7</h4>
                                    <p>Instant access to perfect support</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                <i class="icon-box-icon d-icon-secure"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">100% Secure Payment</h4>
                                    <p>We ensure secure payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                 
                  <section class="product-wrapper pb-10 container appear-animate" data-animation-options="{
                    'delay': '.6s'
                }">
                    <h2 class="title">New Arrivals</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product" >
                            <figure class="product-media">
                                <a href="<?php echo e(route('product.details',$product->slug)); ?>">
                                    <img src="<?php echo e(url($product->image)); ?>" alt="Blue Pinafore Denim Dress"
                                        width="220px" height="245px" style="border:1px solid #000000;">
                                </a>
                               
                                <div class="product-action">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="btn-product btn-quickview" title="Quick View">View Details</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="#"><?php echo e($product->title); ?></a>
                                </h3>
                                <div class="product-price">
                                    <?php
                                        $new_price = $product->price - $product->discount;
                                    ?>
                                    <ins class="new-price">BDT.<?php echo e($new_price); ?></ins>
                                </div>
                               
                            </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </section>
              
               <section class="product-wrapper pb-10 container appear-animate mt-5" data-animation-options="{
                    'delay': '.6s'
                }">
                    <h2 class="title">Categories</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': true,
                                'nav': true
                            }
                        }
                    }">
                    <?php $__currentLoopData = $featured_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="category category-default category-default-1 category-absolute overlay-zoom" >
                            <figure class="product-media">
                                <a href="<?php echo e(route('category.wise.product',$cat->id)); ?>">
                                    <img src="<?php echo e(url($cat->category_image)); ?>" alt="Blue Pinafore Denim Dress"
                                        width="220px" height="245px" style="border:1px solid #000000;">
                                </a>
                             
                                 <div class="category-content">
                                        <h4 class="category-name"><a href="<?php echo e(route('category.wise.product',$cat->id)); ?>"><?php echo e($cat->category_name); ?></a></h4>
                                </div>
                              
                            </figure>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </section>
                <section class="product-wrapper pb-10 container appear-animate mt-5" data-animation-options="{
                    'delay': '.6s'
                }">
                    <h2 class="title">Best Selling</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': true,
                                'nav': true
                            }
                        }
                    }">
                    <?php $__currentLoopData = $best_sell_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product" >
                            <figure class="product-media">
                                <a href="<?php echo e(route('product.details',$product->slug)); ?>">
                                    <img src="<?php echo e($product->image); ?>" alt="Blue Pinafore Denim Dress"
                                        width="220px" height="245px" style="border:1px solid #000000;">
                                </a>
                             
                              
                                <div class="product-action">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="btn-product btn-quickview" title="Quick View">View Details</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product.html"><?php echo e($product->title); ?></a>
                                </h3>
                                <div class="product-price">
                                    <?php
                                        $new_price = $product->price - $product->discount;
                                    ?>
                                    <ins class="new-price">BDT.<?php echo e($new_price); ?></ins>
                                </div>
                               
                            </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </section>
                   <section class="product-wrapper pb-10 container appear-animate mt-5" data-animation-options="{
                    'delay': '.6s'
                }">
                    <h2 class="title">Offers</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': true,
                                'nav': true
                            }
                        }
                    }">
                    <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product" >
                            <figure class="product-media">
                                <a href="<?php echo e(route('product.details',$product->slug)); ?>">
                                    <img src="<?php echo e($product->image); ?>" alt="Blue Pinafore Denim Dress"
                                        width="220px" height="245px" style="border:1px solid #000000;">
                                </a>
                             
                              
                                <div class="product-action">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="btn-product btn-quickview" title="Quick View">View Details</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product.html"><?php echo e($product->title); ?></a>
                                </h3>
                                <div class="product-price">
                                    <?php
                                        $new_price = $product->price - $product->discount;
                                    ?>
                                    <ins class="new-price">BDT.<?php echo e($new_price); ?></ins><del class="old-price"><?php echo e($product->price); ?></del>
                                </div>
                               
                            </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </section>

              
                 <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': true,
                        'items': 1,
                        'autoplay': true,
                        'autoplayTimeout': 8000
                    }">
                       
                          <?php $__currentLoopData = $slider_lowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="<?php echo e(asset(
                'public/upload/slider_image/'.$upper->image)); ?>" alt="intro-banner" width="1903"
                                    height="650" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                   
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </div>

                    <div class="service-list container appear-animate">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                'items': 3,
                                'nav': false,
                                'dots': false,
                                'margin': 20,
                                'autoplay': true,
                                'autoplayTimeout': 5000,
                                'responsive': {
                                    '0': {
                                        'items': 1
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3,
                                        'loop': false
                                    }
                                }
                            }">
                            <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                <i class="icon-box-icon d-icon-truck"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Free Shipping &amp; Return</h4>
                                    <p>Free shipping on orders over $99</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                                <i class="icon-box-icon d-icon-service"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Customer Support 24/7</h4>
                                    <p>Instant access to perfect support</p>
                                </div>
                            </div>

                            <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                <i class="icon-box-icon d-icon-secure"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">100% Secure Payment</h4>
                                    <p>We ensure secure payment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="grey-section pt-10 pb-5">
                    <div class="container mt-3 mb-4">
                        <h2 class="title">Latest Blog</h2>
                        <div class="owl-carousel owl-theme row cols-md-2 cols-1" data-owl-options="{
                            'items': 2,
                            'nav': false,
                            'dots': true,
                            'loop': false,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.3s'
                            }">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="<?php echo e(url('public/upload')); ?>/product-10.jpg" width="280" height="206"
                                            alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html"></a>
                                    </h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                                    <a href="#"
                                        class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-list overlay-dark overlay-zoom appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.4s'
                            }">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="<?php echo e(url('public/upload')); ?>/product-11.jpg" width="280" height="206"
                                            alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html"></a></h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua tempo...</p>
                                    <a href="#"
                                        class="btn btn-outline btn-md btn-dark btn-icon-right">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <!-- End of Main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/layout/home.blade.php ENDPATH**/ ?>