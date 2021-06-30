
<?php $__env->startSection('css'); ?>
<style type="text/css">
  
        #login .container #login-row #login-column #login-box {
                margin-top: 40px;
                max-width: 600px;
              
                border: 1px solid #9C9C9C;
                background-color: #EAEAEA;
                margin-bottom: 40px;
      }

      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }

      #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
      }

  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- End Header -->
       <!-- End Header -->
<!-- End Header -->
<div id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a> <span class="separator">&gt;</span> <span>Order Details</span>
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
                        <a class="btn-lucian" href="#">Order Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- End PageHeader -->
            <div id="main-content-area" class="padtop80 padbot25 my2">
                <div class="container">
                    <div class="tab tab-vertical">
                        <ul class="nav nav-tabs mb-4" role="tablist">
                           <li class="nav-item">
                                <a  href="<?php echo e(route('dashboard')); ?>" style="font-weight: bold">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a  href="<?php echo e(route('customer.order.list')); ?>" style="font-weight: bold;">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a  href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" style="font-weight: bold">Logout</a>
                                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form> 
                            </li>
                        </ul>
                        <div class="tab-content">
                        <div class="container mt-8 mb-4">
					<div class="row gutter-lg">
						<div class="col-lg-12 col-md-12">
							<table class="txt-center myTable" width="100%" border="1">
               <tr>
                 <td width="30%">
                   <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('public/frontend/logo/nashrava normal logo path.png')); ?>" alt="IMG-LOGO" style="width:150px;height:150px;padding : 5px 0px 0px 15px"></a>
                 </td>
                 <td width="40%" style="text-align: center;">
                   <h4><strong>Company Name: Nashrava</strong></h4>
                    <span><strong>Address:</strong>House# 03(4th floor), Road# 19, Sector# 13, Uttara, Dhaka-1230.</span>
                   <span><strong>Phone Number: </strong>01309286974</span><br/>
                    <span><strong>Email:</strong>support@nashrava.co</span>
                   
                 </td>
                 <td width="30%" style="padding-left: 5px;">
                   <strong>Order No: # <?php echo e($order->order_no); ?></strong>
                 </td>
               </tr>
               <tr>
                <td style="padding-left: 5px;"><strong>Billing Info</strong></td>
                <td colspan="2" style="text-align: left;padding-left: 5px;">
                  <strong >Name :&nbsp;</strong><?php echo e($order->shipping->first_name); ?> <?php echo e($order->shipping->last_name); ?> <br/>
                  <strong >Mobile No :&nbsp;</strong><?php echo e($order->shipping->mobile_no); ?><br/>
                  <strong >Email :&nbsp;</strong><?php echo e($order->shipping->email); ?><br/>
                  <strong >Address :&nbsp;</strong><?php echo e($order->shipping->address); ?><br/>
                  <strong>Payment :&nbsp;</strong><?php echo e($order->payment->payment_method); ?>

                       <?php if($order->payment->payment_method == 'Bkash'): ?>
                         (Transaction no:<?php echo e($order->payment->transaction_no); ?>)
                       <?php endif; ?>
                </td>
               </tr>
               <tr>
                 <td colspan="3" style="padding-left: 5px;">
                   <strong>Order Dtails</strong>
                 </td>
               </tr>
               <tr>
                 <td style="padding-left: 5px;"><strong>Product Name & Image</strong></td>
                 <td style="padding-left: 5px;"><strong>Color & Size</strong></td>
                 <td style="padding-left: 5px;"><strong>Quantity & Price</strong></td>
               </tr>
               <?php $__currentLoopData = $order['OrderDetail']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <tr>
                <td style="padding : 5px 0px 0px 5px;">
                  <img src="<?php echo e(url($details->product->image)); ?>"
                            style="width:50px;height:55px;border:1px solid #000;"> &nbsp; <?php echo e($details->product->product_name); ?>

                </td>
                <td style="padding-left: 5px;">
               <?php 
if(!$details->color==0 || !$details->size==0 ){

?>
                 <?php echo e($details->color->color_name); ?>&nbsp; & &nbsp;
                 <?php echo e($details->size->size_name); ?>


    <?php }?>
                 
                </td>
                <td style="padding-left: 5px;">
                   <?php
                      $sub_total = $details->quantity * $details->product->price;
                  ?>
                  <?php echo e($details->quantity); ?> x <?php echo e($details->product->price); ?> = <?php echo e($sub_total); ?>


                </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <tr>
                <td colspan="2" style="text-align: right;padding-right: 5px;"><strong>Grand Total</strong></td>
                <td style="padding-left: 5px;"><?php echo e($order->order_total_amount); ?></td>
               </tr>
             </table>     
						
						</div>
					</div>
				</div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/frontend/single_page/customer/customer-order-details.blade.php ENDPATH**/ ?>