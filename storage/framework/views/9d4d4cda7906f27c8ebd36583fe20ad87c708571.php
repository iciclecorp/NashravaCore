 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_customer')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.customer')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_draft_customer_list')); ?>

                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                         <th width="5%">SL.</th>
                        <th width="20%">Name</th>
                        <th width="15%">Email</th>
                        <th width="15%">Mobile No</th>
                        <th width="15%">Signup status</th>
                        <th width="20%">Address</th>
                        <th width="10%">Action</th>
                      </tr> 
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $draft_customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $draft_cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                          $created = new Carbon\Carbon($draft_cus->created_at);
                          $now = Carbon\Carbon::now();
                          $difference = ($created->diff($now)->days < 1)?'today':$created->diffForHumans($now);
                      ?>
                      <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($draft_cus->name); ?></td>
                        <td><?php echo e($draft_cus->email); ?></td>
                        <td><?php echo e($draft_cus->mobile); ?></td>
                        <td><?php echo e($difference); ?></td>
                        <td><?php echo e($draft_cus->address); ?></td>
                        <td>
                           <a href="<?php echo e(route('draft.customer.delete',$draft_cus->id)); ?>" class="btn btn-danger btn-sm deleteBtn" ><i class="fa fa-trash"></i></a>
                        </td>
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                   <!--  -->
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/customer/draft-customers.blade.php ENDPATH**/ ?>