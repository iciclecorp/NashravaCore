
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
                        <a href="index.html">Home</a> <span class="separator">&gt;</span> <span>Order List</span>
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
                        <a class="btn-lucian" href="#">Order List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- End PageHeader -->
            <div id="main-content-area" class="padtop80 padbot15 my2">
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
						<div class="col-lg-10 col-md-12">
							<table style="text-align: center"  class="shop-table cart-table mt-2 table table-borderd" border="1">
								<thead>
					              <tr>
					                <th width="5%">Order Number</th>
					                <th width="20%">Total Amount</th>
					                <th width="30%">Payment Type</th>
					                <th width="20%">Status</th>
					                <th width="25%">Action</th>
					              </tr>
					            </thead>
								 <tbody>
				                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                  <tr>
				                    <td># <?php echo e($order->order_no); ?></td>
				                    <td><?php echo e($order->order_total_amount); ?></td>
				                    <td>
				                      <?php echo e($order->payment->payment_method); ?>

				                       <?php if($order->payment->payment_method == 'Bkash'): ?>
				                         (Transaction no:<?php echo e($order->payment->transaction_no); ?>)
				                       <?php endif; ?>
				                    </td>
				                    <td>
				                      <?php if($order->status == '0'): ?>
				                      <span style="background-color: red;color:white;padding: 5px;border-radius:5px">Pending</span>
				                      <?php elseif($order->status == '1'): ?>
				                      <span style="background-color: green;color:white;padding: 5px;border-radius:5px">Approved</span>
				                      <?php endif; ?>
				                    </td>
				                    <td>
				                      <a href="<?php echo e(route('customer.order.details',$order->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>Details</a>
				                    </td>
				                  </tr>
				                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                </tbody>
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
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/frontend/single_page/customer/customer-order-list.blade.php ENDPATH**/ ?>