 
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
          <section class="col-md-4 offset-md-4" >
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-primary card-outline" >
              <div class="card-body box-profile">
                  <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo e((!empty($user_info->image))?url($user_info->image):url('public/upload/image_avatar.jpg')); ?>" alt="User profile picture">    
                  </div>
                      <h3 class="profile-username text-center"><?php echo e($user_info->name); ?></h3>
                      <p class=" text-muted text-center"><?php echo e($user_info->address); ?></p>
                      <table width="100%" class="table table-bordered" >
                          <tbody style="color:#660033">
                              <tr>
                                  <td>Mobile No.</td>
                                  <td><?php echo e($user_info->mobile); ?></td>
                              </tr>
                              <tr>
                                  <td>Email</td>
                                  <td><?php echo e($user_info->email); ?></td>
                              </tr>
                          </tbody>
                      </table>
                  <a href="<?php echo e(route('profile.edit',$user_info->id)); ?>" class="btn btn-primary btn-block"><b>Edit Profile </b></a>
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/profile/index.blade.php ENDPATH**/ ?>