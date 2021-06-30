 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_coupon')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.coupon')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_coupon_list')); ?>

                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('coupons.create')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?php echo e(__('back_blade.view_coupon_add')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="5%">SL.</th>
                        <th width="15%">Code</th>
                        <th width="15%">Coupon Type</th>
                        <th width="15%">Amount</th>
                        <th width="20%">Expiry Date</th>
                        <th width="15%">Status</th>
                        <th width="15%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($coupon->coupon_code); ?></td>
                        <td><?php echo e($coupon->coupon_type); ?></td>
                        <td>
                          <?php echo e($coupon->amount); ?>

                          <?php if($coupon->amount_type == 'Percentage'): ?>
                          %
                          <?php else: ?>
                          BDT
                          <?php endif; ?>
                        </td>
                         <td><?php echo e($coupon->expiry_date); ?></td>
                        <td>  
                          <?php if($coupon->status == '1'): ?>
                          <a style="color:white;padding-right:17px;border-radius: 5px;"  class="btn btn-success btn-sm" href="<?php echo e(route('change.status',$coupon->id)); ?>">Active</a>
                          <?php else: ?>
                          <a  style="color:white;border-radius: 5px;" class="btn btn-danger btn-sm" href="<?php echo e(route('change.status',$coupon->id)); ?>">Inactive</a>
                          <?php endif; ?></td>
                        <td>
                           <div class="row">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                             
                                <form action="<?php echo e(route('coupons.destroy',$coupon->id)); ?>" method="post">
                                   <?php echo csrf_field(); ?>
                                   <?php echo method_field('delete'); ?>
                                  <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></a>
                                </form>&nbsp;&nbsp;  
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
  <script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/coupon/index.blade.php ENDPATH**/ ?>