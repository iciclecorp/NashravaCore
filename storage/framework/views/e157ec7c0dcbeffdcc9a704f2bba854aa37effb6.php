 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">home</a></li>
              <li class="breadcrumb-item active">order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Order Details Information </h3>
              
                 <span style="margin-right:3px;"><a class="btn btn-primary btn-sm float-right" href="<?php echo e(route('order.approve.list')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Approved Order List</a></span>
          
            
                      <span><a class="btn btn-success btn-sm float-right" href="<?php echo e(route('order.pending.list')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Pending Order List</a></span>
                 
              </div><!-- /.card-header -->
              <div class="card-body">
            <table class="txt-center myTable" width="100%" border="1">
               <tr>
                 <td width="20%">
                   <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('public/frontend/logo/nashrava normal logo path.png')); ?>" alt="IMG-LOGO" style="width:150px;height:150px;padding : 5px 0px 5px 15px"></a>
                 </td>
                 <td colspan="2" width="50%" style="text-align: center;">
                    <h4><strong>Company Name: Nashrava</strong></h4>
                    <span><strong>Address:</strong>House# 03(4th floor), Road# 19, Sector# 13, Uttara, Dhaka-1230.</span><br/>
                   <span><strong>Phone Number: </strong>01309286974</span><br/>
                    <span><strong>Email:</strong>support@nashrava.co</span>
                   
                 </td>
                 <td width="30%" style="padding-left: 5px; text-align: center">
                   <strong>Order No: # <?php echo e($order->order_no); ?></strong>
                 </td>
               </tr>
               <tr>
                <td style="padding-left: 5px;"><strong>Billing Info</strong></td>
                <td  style="text-align: left;padding-left: 5px;">
                  <strong >Name :&nbsp;</strong><?php echo e($order->shipping->first_name); ?> <?php echo e($order->shipping->last_name); ?> <br/>
                  <strong >Mobile No :&nbsp;</strong><?php echo e($order->shipping->mobile_no); ?><br/>
                  <strong >Email :&nbsp;</strong><?php echo e($order->shipping->email); ?><br/>
                  <strong >Address :&nbsp;</strong><?php echo e($order->shipping->address); ?><br/>
                  <strong>Payment :&nbsp;</strong><?php echo e($order->payment->payment_method); ?>

                       <?php if($order->payment->payment_method == 'Bkash'): ?>
                         (Transaction no:<?php echo e($order->payment->transaction_no); ?>)
                       <?php endif; ?>
                </td>
                <td style="padding-left: 5px;"><strong>Shipping Info</strong></td>
                 <td  style="text-align: left;padding-left: 5px;">
                  <strong >Name :&nbsp;</strong><?php echo e($order->shipping->del_first_name); ?> <?php echo e($order->shipping->del_last_name); ?> <br/>
                  <strong >Mobile No :&nbsp;</strong><?php echo e($order->shipping->del_mobile_no); ?><br/>
                  <strong >Email :&nbsp;</strong><?php echo e($order->shipping->del_email); ?><br/>
                  <strong >Address :&nbsp;</strong><?php echo e($order->shipping->del_address); ?><br/>
                 
                </td>
               </tr>
               <tr>
                 <td colspan="4" style="padding-left: 5px; text-align: center">
                   <strong>Order Dtails</strong>
                 </td>
               </tr>
               <tr>
                 <td  style="padding-left: 5px;"><strong>Product Name & Image</strong></td>
                 <td colspan="2" style="padding-left: 5px;"><strong>Color & Size</strong></td>
                 <td style="padding-left: 5px;"><strong>Quantity & Price</strong></td>
               </tr>
               <?php $__currentLoopData = $order['OrderDetail']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <tr>
                <td  style="padding : 5px 0px 0px 5px;">
                  <img src="<?php echo e(url($details->product->image)); ?>"
                            style="width:50px;height:55px;border:1px solid #000;"> &nbsp; <?php echo e($details->product->purchase->product_name); ?>

                </td>
                <td colspan="2" style="padding-left: 5px;">
                 <?php echo e($details->color->color_name); ?>&nbsp; & &nbsp;
                 <?php echo e($details->size->size_name); ?>

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
                <td colspan="3" style="text-align: right;padding-right: 5px;"><strong>Grand Total</strong></td>
                <td style="padding-left: 5px;"><?php echo e($order->order_total_amount); ?></td>
               </tr>
            </table>    
               <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/order/order-details.blade.php ENDPATH**/ ?>