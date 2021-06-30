 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_purchase')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.purchase')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_purchase_list')); ?>

                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('purchase.create')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?php echo e(__('back_blade.view_purchase_add')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-hover table-striped table-responsive" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="5%">SL.</th>
                        <th width="5%">Purchase No</th>
                        <th width="15%">Purchase Date</th>
                        <th width="15%">Category Name</th>
                        <th width="15%">Product Name</th>
                        <th width="10%">Buying Quantity</th>
                        <th width="10%">Unit Price</th>
                        <th width="10%">Buying Price</th>
                        <th width="15%">Edit / Delete</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $purchase_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($purchase->purchase_no); ?></td>
                        <td><?php echo e(date('d-m-Y',strtotime($purchase->purchase_date))); ?></td>
                        <td><?php echo e($purchase->category->category_name); ?></td>
                        <td><?php echo e($purchase->product_name); ?></td>
                        <td><?php echo e($purchase->buying_qty); ?>

                        </td>
                        <td><?php echo e($purchase->unit_price); ?></td>
                        <td><?php echo e($purchase->buying_price); ?></td>
                        <td>
                          <div class="row">
                          <?php
                           $count_product = App\Model\Product::where('product_name',$purchase->id)->count();
                           ?>
                            &nbsp;&nbsp;
                            <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('purchase.edit',$purchase->id)); ?>"><i class="fa fa-edit"></i></a>&nbsp;
                           <?php if($count_product < 1): ?>
                           <form action="<?php echo e(route('purchase.destroy',$purchase->id)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></a>
                           </form>
                           <?php endif; ?>
                       
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/backend/purchase/index.blade.php ENDPATH**/ ?>