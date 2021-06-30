 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage profile')); ?></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.profile')); ?></li>
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
          <section class="col-md-12" >
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card" >
              <div class="card-header">
                <h3><?php echo e(__('back_blade.edit_pass')); ?></h3>
              </div><!-- /.card-header -->
                  <div class="card-body">
                    <form  method="post" action="<?php echo e(route('change.password')); ?>"  id="myForm">
                       <?php echo csrf_field(); ?>
                      <div class="form-row">
                          <div class="form-group col-md-4">
                              <label for="current_password">Current Password</label>
                              <input type="password" name="current_password" placeholder="Current Password" class="form-control">
                              <font style="color:red">
                              <?php echo e(($errors->has('current_password'))?($errors->first('current_password')):' '); ?>

                              </font>
                          </div>
                          <div class="form-group col-md-4">
                              <label for="new_password">New Password</label>
                              <input type="password" name="new_password" placeholder="New Password" class="form-control">
                              <font style="color:red">
                              <?php echo e(($errors->has('new_password'))?($errors->first('new_password')):' '); ?>

                              </font>
                          </div>
                          <div class="form-group col-md-4">
                              <label for="confirm_new_password">Confirm New Password</label>
                              <input type="password" name="confirm_new_password" placeholder="Confirm New Password" class="form-control">
                              <font style="color:red">
                              <?php echo e(($errors->has('confirm_new_password'))?($errors->first('confirm_new_password')):' '); ?>

                              </font>
                          </div>
                          <div class="form-group col-md-6">
                              <input type="submit" name="submit" value="Changed" class="btn btn-primary">
                          </div>
                      </div>
                    </form>
                  </div><!-- /.card-body -->
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/profile/edit-password.blade.php ENDPATH**/ ?>