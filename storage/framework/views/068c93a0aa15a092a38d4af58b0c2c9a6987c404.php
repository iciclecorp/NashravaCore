 
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
                <h3> Approved Order List </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                          <th width="5%">SL.</th>
                          <th width="5%">Order No</th>
                          <th width="20%">Total Amount</th>
                          <th width="30%">Payment Type</th>
                          <th width="20%">Status</th>
                          <th width="25%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td># <?php echo e($key + 1); ?></td>
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
                              <div class="row">&nbsp;&nbsp;&nbsp;
                              <a href="<?php echo e(route('order.details',$order->id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Details</a>&nbsp;&nbsp;&nbsp;
                               <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('order.report.print',$order->id)); ?>" target="_blank"><i class="fa fa-print"></i>&nbsp;&nbsp;</a>
                             </div>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>   

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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/order/approve-list.blade.php ENDPATH**/ ?>