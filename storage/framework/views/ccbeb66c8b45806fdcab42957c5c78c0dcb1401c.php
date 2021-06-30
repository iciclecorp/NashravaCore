 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_invoice')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.invoice')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_invoice_list')); ?>

                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('invoice.create')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?php echo e(__('back_blade.view_invoice_add')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-hover " style="color:#00004d" width="100%">
                    <thead>
                      <tr>
                        <th width="5%">SL.</th>
                        <th width="15%">invoice No</th>
                        <th width="35%">Customer Name</th>
                        <th width="15%">Date</th>
                        <th width="20%">Total Amount</th>
                        <th width="10">Status</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $invoice_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td># <?php echo e($invoice->invoice_no); ?></td>
                        <td>
                            <?php echo e($invoice->payment->customer->customer_name); ?>

                            (<?php echo e($invoice->payment->customer->mobile_no); ?>-<?php echo e($invoice->payment->customer->address); ?>)
                        </td>
                        <td><?php echo e(date('d-m-Y',strtotime($invoice->date))); ?></td>
                        <td><?php echo e($invoice->payment->total_amount); ?></td>
                        <td>
                            <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('invoice.print',$invoice->id)); ?>" target="_blank"><i class="fa fa-print"></i></a>
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/invoice/index.blade.php ENDPATH**/ ?>