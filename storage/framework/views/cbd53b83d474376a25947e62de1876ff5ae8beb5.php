 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Product Measurement</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active">product-measurement</li>
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
             
                <h3>Product-Measurement Add
                  <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('product-measurement.index')); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;Product-Measurement List</a>
                </h3>
             
              </div><!-- /.card-header -->
              <div class="card-body">
                <form  method="post" action="<?php echo e(route('product-measurement.store')); ?>"  id="myForm" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="product_id">Product Name</label>
                            <select type="text" name="product_id" class="form-control form-control-sm select2" placeholder="Please enter size name" required>
                              <option value="">--select Product--</option>
                              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($product->id); ?>"><?php echo e($product->purchase->product_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select> 
                           <!--  <font style="color:#e60000">
                                 <?php echo e(($errors->has('size_name'))?($errors->first('size_name')):' '); ?>

                            </font> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label for="position">Position</label>
                            <select type="text" name="size_id" class="form-control form-control-sm select2" placeholder="Please enter size name" required>
                              <option value="">--select Position--</option>
                               <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($size->id); ?>"><?php echo e($size->measurement); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select> 
                           <!--  <font style="color:#e60000">
                                 <?php echo e(($errors->has('size_name'))?($errors->first('size_name')):' '); ?>

                            </font> -->
                        </div>
                        <div class="form-group col-md-4">
                          <label>X-Small</label>
                          <input type="text" name="x_small" class="form-control form-control-sm">
                          
                        </div>
                        <div class="form-group col-md-4">
                          <label>Small</label>
                          <input type="text" name="small" class="form-control form-control-sm">
                          
                        </div>
                        <div class="form-group col-md-4">
                          <label>Medium</label>
                          <input type="text" name="medium" class="form-control form-control-sm">
                          
                        </div>
                         <div class="form-group col-md-4">
                          <label>Large</label>
                          <input type="text" name="large" class="form-control form-control-sm">
                          
                        </div>
                         <div class="form-group col-md-4">
                          <label>X-Large</label>
                          <input type="text" name="x_large" class="form-control form-control-sm">
                          
                        </div>
                        <div class="form-group col-md-4">
                          <label>XX-Large</label>
                          <input type="text" name="xx_large" class="form-control form-control-sm">
                          
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 30px">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/product-size-measurement/create.blade.php ENDPATH**/ ?>