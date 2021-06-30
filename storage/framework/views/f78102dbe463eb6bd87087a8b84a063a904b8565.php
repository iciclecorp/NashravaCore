 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_size')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.size')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_size_edit')); ?>

                  <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('size.index')); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;<?php echo e(__('back_blade.view_size_list')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <form  method="post" action="<?php echo e(route('size.update',$size->id)); ?>"  id="myForm" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('patch'); ?>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="size_name">Size Name</label>
                              <input type="text" name="size_name" class="form-control"  value="<?php echo e($size->size_name); ?>">
                              <font style="color:#e60000">
                                 <?php echo e(($errors->has('size_name'))?($errors->first('size_name')):' '); ?>

                              </font>
                          </div>
                          <div class="form-group col-md-6" style="padding: 30px;">
                              <input type="submit" name="submit" value="Update" class="btn btn-primary">
                          </div>
                      </div>
                  </form>
              <!-- /.card-body -->
              </div>
            </div>
          </section>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/size/edit.blade.php ENDPATH**/ ?>