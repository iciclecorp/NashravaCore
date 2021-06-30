 
 <?php $__env->startSection('content'); ?>
<!-- Start Breadcrumb -->
    <div id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a> <span class="separator">&gt;</span> <span> Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Banner -->
    <div id="banner-area" class="gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-inner blog-banner">
                        <a class="btn-lucian" href="#">Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Main Content -->
    <div id="main-content-area" class="padtop80 padbot75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="cart-table table-condensed ">
                            <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product Name</th>
                                    <th class="product-name">Size & Color</th>
                                    <th class="product-subtotal">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    
                                    <th class="product-grandtotal">SubTotal</th>
                                </tr>
                            </thead>
                                <?php
                                $count=0;
                                $subtotal = 0;
                                $subtotals = 0;
                                ?>
                                <?php if(Cart::count() > 0): ?>
                                <tbody>
                                     <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $count++;
                                        $subtotal += $cart->price * $cart->qty;
                                        ?>
                                    <tr>
                                        <td class="product-remove"><a href="<?php echo e(route('delete.cart', $cart->rowId)); ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img alt="" src="<?php echo e(asset($cart->options->image)); ?>" width="100px" height="100px">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#"><?php echo e($cart->name); ?></a>
                                        </td>
                                        <td class="product-edit"> <span>Size: <?php echo e($cart->options->size_name); ?></span><br/>
                                    <span>Color: <?php echo e($cart->options->color_name); ?></span>
                                        </td>
                                         <td class="product-subtotal">BDT. <?php echo e($cart->price); ?></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                            <form action="<?php echo e(route('edit.cart')); ?>" class="sendupdate<?php echo $count;?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="rowid" class="rowid" value="<?php echo e($cart->rowId); ?>">
                                                <input class="cart-plus-minus-box " type="text"  value="<?php echo e($cart->qty); ?>">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">BDT. <?php echo e($subtotal); ?></td>
                                        <!-- <td class="product-grandtotal">$250.00</td> -->
                                    </tr>
                                    <?php
                                       $subtotals += $subtotal;
                                    ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                       <td colspan="6" style="text-align: right;">Grand Sub Total</td>
                                       <td><strong>BDT. <?php echo e($subtotals); ?></strong></td> 
                                    </tr>
                                </tbody>
                                 <?php else: ?> 
                                <tbody>
                                <tr>
                                    <td colspan="4">No Item added yet</td>
                                </tr>
                              </tbody>
                               <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
               
                </div>
                <div class="col-md-6">
                    <div class="update-cart-area">
                    <a href="<?php echo e(route('product.list')); ?>" class="lucian-border-btn">CONTINUE SHOPPING</a>
                    <input type="submit" class="lucian-border-btn" value="UPDATE SHOPPING CART">
</form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Place Section -->
                   <!--  <div class="place-section">
                        <div class="place-head">
                            <h2>ESTIMATE SHIPPING AND TAX</h2>
                            <p>Enter your destination to get shipping & tax</p>
                        </div>
                        <div class="lucian-select-options">
                            <h5>Country <em class="county-star">*</em></h5>
                            <div class="lucian-options">
                                <form class="form-horizontal" method="post">
                                    <select class="option-list" name="language">
                                        <option value="11">United States </option>
                                        <option value="12">Afganisthan</option>
                                        <option value="21">Albenia</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="lucian-select-options options-state half-field tax-options">
                            <h5>State/Province <em class="county-star">*</em></h5>
                            <div class="lucian-options">
                                <form class="form-horizontal" method="post">
                                    <select class="option-list" name="language">
                                        <option value="select">--Select Options--</option>
                                        <option value="11">United States </option>
                                        <option value="12">Afganisthan</option>
                                        <option value="21">Albenia</option>
                                        <option value="25">Algeria</option>
                                        <option value="25">Australia</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="lucian-select-options half-field-last tax-options">
                            <h5>Zip/Postal Code</h5>
                            <div class="lucian-options">
                                <form class="form-horizontal" method="post">
                                    <select class="option-list" name="language">
                                        <option value="options">--Select Options--</option>
                                        <option value="11">1234</option>
                                        <option value="12">1234</option>
                                        <option value="21">1234</option>
                                        <option value="25">1234</option>
                                        <option value="25">1234</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <button type="submit" class="lucian-gray-btn">get a Quote</button>
                    </div> -->
                    <!-- End Place Section -->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Place Section -->
                    <div class="place-section">
                        <div class="place-head">
                            <h2>ESTIMATE SHIPPING AND TAX</h2>
                            <p>Checkout with multiples address</p>
                        </div>
                        <!-- Start Table -->
                        <table>
                            <tbody>
                                <tr>
                                    <td class="subtotal">Subtotal</td>
                                    <td>BDT. <?php echo e($subtotals); ?></td>
                                </tr>
                               <!--  <tr>
                                    <td class="shipping">Shiping</td>
                                    <td>Free</td>
                                </tr> -->
                                <tr>
                                    <td class="grandtotal">Grandtotal</td>
                                    <td>BDT. <?php echo e($subtotals); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table -->
                        <?php if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL): ?>
									<a href="<?php echo e(route('customer.checkout')); ?>" class="lucian-gray-btn">Proceed to checkout</a>
									<?php elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL): ?>
									<a href="<?php echo e(route('customer.payment')); ?>" class="lucian-gray-btn">Proceed to checkout</a>
									<?php else: ?>
									<a href="<?php echo e(route('customer.login')); ?>" class="lucian-gray-btn">Proceed to checkout</a>
									<?php endif; ?>
                    </div>
                    <!-- End Place Section -->
                </div>
            </div>
        </div>
    </div>
    

   
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/frontend/cart.blade.php ENDPATH**/ ?>