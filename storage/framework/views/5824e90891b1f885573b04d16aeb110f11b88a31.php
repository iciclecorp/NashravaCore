

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/photoswipe/photoswipe.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/vendor/photoswipe/default-skin/default-skin.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/demo2.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- End Header -->
	<main class="main mt-4">
			<div class="page-content mb-10">
				<div class="container">
					<div class="product product-single row mb-4">
						<div class="col-md-6">
							<div class="product-gallery pg-vertical">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
									<?php $__currentLoopData = $sub_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<figure class="product-image">
										<img src="<?php echo e(url('public/upload/product_image/product_sub_images/'.$img->sub_image)); ?>"
											data-zoom-image="images/demos/demo2/product/product-1-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
									</figure>
								    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
										<?php $__currentLoopData = $sub_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="product-thumb active">
											<img src="<?php echo e(url('public/upload/product_image/product_sub_images/'.$img->sub_image)); ?>"
												alt="product thumbnail" width="109" height="122">
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									</div>
									<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="demo2.html"><i class="d-icon-home"></i></a></li>
										<li><a href="#" class="active">Products</a></li>
										<li>Detail</li>
									</ul>

									<ul class="product-nav">
										<li class="product-nav-prev">
											<a href="#">
												<i class="d-icon-arrow-left"></i> Prev
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
										<li class="product-nav-next">
											<a href="#">
												Next <i class="d-icon-arrow-right"></i>
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
									</ul>
								</div>

								<h1 class="product-name"><?php echo e($product->title); ?></h1>
								<div class="product-meta">
									SKU: <span class="product-sku">12345670</span>
									BRAND: <span class="product-brand"><?php echo e($product->brand->brand_name); ?></span>
								</div>
								<?php
                                    $new_price = $product->price - $product->discount;
                                ?>
								<div class="product-price">BDT. <?php echo e($new_price); ?></div>
								<p class="product-short-desc"><?php echo e($product->details); ?></p>
                               <!--  Cart Form Start -->

                            <form id="detailsForm" action="<?php echo e(route('insert.cart')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
								<div class="product-form product-variations product-color">
									<label>Color:</label>
									<div class="select-box">
										<select name="color_id" id="color_id" class="form-control" required>
											<option value="" selected="selected">Select Color</option>
											<?php $__currentLoopData = $product_colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($color->color_id); ?>"><?php echo e($color->color->color_name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
										<font style="color:red">
                                        <?php echo e(($errors->has('color_id'))?($errors->first('color_id')):' '); ?>


                                 </font>
									</div>
								</div>

								<div class="product-form product-variations product-size">
									<label>Size:</label>
									<div class="product-form-group">
										<div class="select-box">
											<select name="size_id" id="size_id" class="form-control" required>
												<option value="" selected="selected" >Select Size</option>
												<?php $__currentLoopData = $product_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($size->size_id); ?>"><?php echo e($size->size->size_name); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
											<font style="color:red">
                                            <?php echo e(($errors->has('size_id'))?($errors->first('size_id')):' '); ?>

                                            </font>
										</div>
									</div>
								</div>
								<!-- <div class="product-variation-price">
									<span>$239.00</span>
								</div> -->

								<hr class="product-divider">

								<div class="product-form product-qty">
									<label>QTY:</label>
									<div class="product-form-group">
										<div class="input-group">
											<button type="button" class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" name="qty" type="number" min="1" max="1000000">
											<button type="button" class="quantity-plus d-icon-plus"></button>
										</div>
										<button type="submit" class="btn btn-primary btn-sm" style="background-color: #f55e22;"><i class="d-icon-bag" style="padding:14px;"></i>&nbsp; &nbsp;Add To
											Cart</button>

									</div>
								</div>

							</form>
							<!-- end from -->	

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-vimeo fab fa-vimeo-v"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs mb-4">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">characteristics of Design </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								 <table border="1" class="table table-bordered table-sm">
								<tbody>
									<tr>
										<th>Position</th>
										<th>X-Small</th>
										<th>Small</th>
										<th>Medium</th>
										<th>Large</th>
										<th>X-Large</th>
										<th>XX-Large</th>
									</tr>
                                    <?php $__currentLoopData = $product_measurments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr style="text-align: center">
										<td><?php echo e($meas->sizeMeasurement->measurement); ?></td>
										<td><?php echo e($meas->x_small); ?></td>
										<td><?php echo e($meas->small); ?></td>
										<td><?php echo e($meas->medium); ?></td>
										<td><?php echo e($meas->large); ?></td>
										<td><?php echo e($meas->x_large); ?></td>
										<td><?php echo e($meas->xx_large); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    </tbody>
							</table>
							</div>
							
						</div>
					</div>

					<section>
						<h2 class="title">Our Featured</h2>

						<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
							data-owl-options="{
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
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
						 <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="product shadow-media">
								<figure class="product-media">
									<a href="#">
										<img src="<?php echo e(url($product->image)); ?>" alt="product" width="280"
											height="315">
									</a>
									<div class="product-label-group">
										<label class="product-label label-new">new</label>
									</div>
								
									<div class="product-action">
										<a href="<?php echo e(route('product.details',$product->slug)); ?>" class="btn-product btn-quickview" title="Quick View">Quick View</a>
									</div>
								</figure>
								<div class="product-details">

									<div class="product-cat">
										<a href="#">product</a>
									</div>
									<h3 class="product-name">
										<a href="#l"><?php echo e($product->title); ?></a>
									</h3>
									 <?php
                                        $new_price = $product->price - $product->discount;
                                    ?>
									<div class="product-price">
										<ins class="new-price">BDT. <?php echo e($new_price); ?></ins><del class="old-price"><?php echo e($product->price); ?></del>
									</div>
									
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							
						</div>
					</section>
				</div>
			</div>
		</main>		
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#detailsForm').validate({
    rules: {
      color_Id: {
        required: true,
      },
     size_id: {
        required: true,
   
      },
    },
    messages: {
      color_Id: {
        required: "Please select Color",
      },
      size_id: {
        required: "Please select Size",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
    <script src="<?php echo e(asset('public/frontend')); ?>/vendor/photoswipe/photoswipe.min.js"></script>
	<script src="<?php echo e(asset('public/frontend')); ?>/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/frontend/single_page/product-details.blade.php ENDPATH**/ ?>