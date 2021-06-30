<!DOCTYPE html>
<html>
<head><title>Order Report</title>
<style>
 #border {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#border td, #border th {
  border: 1px solid #ddd;
  padding: 8px;
}

#border tr:nth-child(even){background-color: #f2f2f2;} 
</style>

</head>	
<body>
      <div class="col-md-9">
                   <div class="card">
                        <div class="card-header"><?php echo e(__('Customer Dasboard')); ?></div>
                        <div class="card-body" style="min-height:215px">
                        <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Order Details</td>
                        <td style="width: 50%; vertical-align: top;" class="text-left">Shipping / Customer Address</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <b>Order ID:</b> <?php echo e($order->order_no); ?><br>
                            <b>Order date:</b><?php echo e($order->created_at->format('d/m/Y')); ?><br>
                            <b>Order Status:</b>  
                            <?php if($order->status == '0'): ?>
                            <span>Pending</span>
                            <?php elseif($order->status == '1'): ?>
                            <span>Confirmed</span>
                            <?php endif; ?><br>
                            <b>Payment Method:</b> <?php echo e($order->payment_method); ?>

                        </td>
                        <td class="text-left">
                          <?php
                            $shipping = App\Model\Shipping::where('user_id' , $order->user_id)->first();
                          ?>
                            <span>Name :</span>  <?php echo e($shipping->first_name); ?> <?php echo e($shipping->last_name); ?>

                            <br><span>Mobile No :</span> <?php echo e($shipping->mobile_no); ?>

                            <br><span>Address :</span> <?php echo e($shipping->address); ?>

                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%">
                        <thead>
                            <tr class="text-center" style="background: #d1d1d1">
                                <th class="t-pro" width="20%">Product</th>
                                <th class="t-price">Variation</th>
                                <th class="t-price">Price</th>
                                <th class="t-qty">Quantity</th>
                                <th class="t-total">Total</th>
                            </tr>
                        </thead>
                        <?php
                           $orderDetails = App\Model\OrderDetail::where('order_id' , $order->id)->get();
                           $subTotal = 0;
                        ?>
                        <tbody>

                          <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td class="t-pro d-flex">
                                    <div class="t-img">
                                        <a href="#"><img src="<?php echo e(url($order->product->image)); ?>" alt="" width="100px" height="100px"></a>
                                    </div>&nbsp;&nbsp;
                                    <div class="t-content">
                                        <p class="t-heading"><a href="#"><?php echo e($order->product->purchase->product_name); ?></a></p>
                                    
                                    </div>
                                </td>
                                <td>
                                    <span>Size: <?php echo e($order->size->size_name); ?></span><br/>
                                    <span>Color: <?php echo e($order->color->color_name); ?></span>
                                </td>
                              
                                <td>BDT. <?php echo e($order->product->price); ?></td>
                                <td class="t-total"><?php echo e($order->quantity); ?></td>
                                <td>BDT. <?php echo e($order->product->price * $order->quantity); ?></td>
                                
                            </tr>
                            <?php
                                 $subTotal = ($order->product->price * $order->quantity);
                            ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </tbody>



                        <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right"><b>Sub-Total</b>
                            </td>
                            <td class="text-right"><?php echo e($subTotal); ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right"><b>Total</b>
                            </td>
                            <td class="text-right"><?php echo e($subTotal); ?></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                        </div>
                    </div>
               </div>
</body>
</html><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/pdf/order-details-pdf.blade.php ENDPATH**/ ?>