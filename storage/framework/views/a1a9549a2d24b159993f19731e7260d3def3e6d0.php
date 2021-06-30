

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/demo2.min.css">

        <main class="main">
            <div class="page-content mb-10">
                <div class="container">
                    <nav class="breadcrumb-nav">
                        <ul class="breadcrumb breadcrumb-lg">
                            <li><a href="#"><i class="d-icon-home"></i></a></li>
                            <li>All Products</li>
                        </ul>
                    </nav>
                   
                   <br/>
                   <div class="toolbox-wrap">
                        <aside class="sidebar sidebar-fixed shop-sidebar closed">
                            <div class="sidebar-overlay">
                                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            </div>
                            <div class="sidebar-content">
                                <div class="filter-actions">
                                    <a href="#"
                                        class="sidebar-toggle-btn toggle-remain btn btn-sm btn-outline btn-primary">Filters<i
                                            class="d-icon-arrow-left"></i></a>
                                    <a href="#" class="filter-clean text-primary">Clean All</a>
                                </div>
                                <!-- <a href="#" class="filter-clean text-primary">Clean All</a> -->
                                <div class="row cols-lg-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Categories</h3>
                                        <div class="widget-body pt-2">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <a href="<?php echo e(route('category.wise.product',$category->id)); ?>" class="tag"><?php echo e($category->category_name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h3 class="widget-title">Sub Categories</h3>
                                        <div class="widget-body pt-2">
                                            <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <a href="<?php echo e(route('sub.category.wise.product',$sub->id)); ?>" class="tag"><?php echo e($sub->sub_category_name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                     <div class="widget">
                                        <h3 class="widget-title">Brands</h3>
                                        <div class="widget-body pt-2">
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route('brand.wise.product',$brand->id)); ?>" class="tag"><?php echo e($brand->brand_name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h3 class="widget-title">Price</h3>
                                       <!--  <ul class="widget-body filter-items">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">BDT.0.00 - BDT.1000.00</a></li>
                                            <li><a href="#">BDT.1000.00 - BDT.2000.00</a></li>
                                            <li><a href="#">BDT.2000.00 - BDT.3000.00</a></li>
                                            <li><a href="#">BDT.3000.00 - BDT.4000.00</a></li>
                                            <li><a href="#">BDT.4000.00 - BDT.5000.00</a></li>
                                            <li><a href="#">BDT.5000.00 - above</a></li>
                                        </ul> -->
                                        <form action="<?php echo e(route('price.wise.product')); ?>" method="GET">
                                        <select style="color:black;font-weight: bold" name="price_range" class="form-control form-control-sm" required>
                                            <option value="">Select Price Range And Submit</option>
                                            <option style="color:black;font-weight: bold" value="1">BDT.0.00 - BDT.1000.00</option>
                                            <option style="color:black;font-weight: bold" value="2">BDT.1000.00 - BDT.2000.00</option>
                                            <option style="color:black;font-weight: bold" value="3">BDT.2000.00 - BDT.3000.00</option>
                                            <option style="color:black;font-weight: bold" value="4">BDT.3000.00 - BDT.4000.00</option>
                                            <option style="color:black;font-weight: bold" value="5">BDT.4000.00 - BDT.5000.00</option>
                                            <option style="color:black;font-weight: bold" value="6">BDT.5000.00 - above</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="toolbox sticky-content sticky-toolbox fix-top">
                            <div class="toolbox-left">
                                <a href="#"
                                    class="toolbox-item left-sidebar-toggle btn btn-outline btn-primary btn-icon-left font-primary"><i
                                        class="d-icon-filter-2"></i>Filters</a>
                               <!--  <p class="toolbox-item show-info mr-sm-auto">Showing <span> 12 of 56 </span> Products
                                </p> -->
                            </div>
                           <!--  <div class="toolbox-right">
                                <div class="toolbox-item toolbox-sort select-box">
                                    <label>Sort By :</label>
                                    <select name="orderby" class="form-control">
                                        <option value="default">Default</option>
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="date">Latest</option>
                                        <option value="price-low">Sort forward price low</option>
                                        <option value="price-high">Sort forward price high</option>
                                        <option value="">Clear custom sort</option>
                                    </select>
                                </div>
                                <div class="toolbox-item toolbox-layout">
                                    <a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
                                    <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row cols-2 cols-sm-3 cols-md-4 product-wrapper mt-5">
                          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-wrap">
                          
                            <div class="product shadow-media">
                                <figure class="product-media">
                                    <a href="<?php echo e(route('product.details',$product->slug)); ?>">
                                        <img src="<?php echo e(url($product->image)); ?>" alt="product" width="280"
                                            height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                   
                                    <div class="product-action">
                                        <a href="<?php echo e(route('product.details',$product->slug)); ?>" class="btn-product btn-quickview" title="Quick View">View Details</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                  
                                    <div class="product-cat">
                                        <a href="shop-grid-3col.html">products</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo2-product.html"><?php echo e($product->title); ?></a>
                                    </h3>
                                    <div class="product-price">
                                    <?php
                                        $new_price = $product->price - $product->discount;
                                    ?>
                                    <ins class="new-price">BDT.<?php echo e($new_price); ?></ins><del class="old-price"><?php echo e($product->price); ?></del>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
                   <!--  <nav class="toolbox toolbox-pagination justify-content-center">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                    aria-disabled="true">
                                    <i class="d-icon-arrow-left"></i>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next<i class="d-icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </main>
      
         <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>            

    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/sticky/sticky.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/single_page/product-list.blade.php ENDPATH**/ ?>