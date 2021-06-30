 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_user')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.user')); ?></li>
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
                    <h3><?php echo e(__('back_blade.view_user_edit')); ?><a class="btn btn-success btn-sm float-right" href="<?php echo e(route('user.index')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;<?php echo e(__('back_blade.view_user_list')); ?></a></h3>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <form  action="<?php echo e(route('user.update',$user_info->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('patch'); ?>
                      <div class="row">
                          <div class="form-group col-md-4">
                               <label for="user_type">User Type</label>
                               <select name="user_type" class="form-control">
                                  <option value=" ">Select User type</option>
                                  <option value="admin" <?php echo e(($user_info->user_type == 'admin')?('selected'):' '); ?>>Admin</option>
                                  <option value="user" <?php echo e(($user_info->user_type =='user')?('selected'):' '); ?>>User</option>
                               </select>
                             <font style="color:red"><?php echo e(($errors->has('user_type'))?($errors->first('user_type')):' '); ?></font>
                          </div>
                          <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="<?php echo e($user_info->name); ?>" class="form-control">
                                <font style="color:red"><?php echo e(($errors->has('name'))?($errors->first('name')):' '); ?></font>
                          </div>
                          <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo e($user_info->email); ?>" class="form-control">
                                <font style="color:red"><?php echo e(($errors->has('email'))?($errors->first('email')):' '); ?></font>
                          </div>
                          <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </div>
                    </form>
                  </div>
               <!-- /.card-body -->
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/user/edit.blade.php ENDPATH**/ ?>