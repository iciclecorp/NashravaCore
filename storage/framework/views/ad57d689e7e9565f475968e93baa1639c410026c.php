 
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
                <h3><?php echo e(__('back_blade.view_purchase_edit')); ?>

                  <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('purchase.index')); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;<?php echo e(__('back_blade.view_purchase_list')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <form  method="post" action="<?php echo e(route('purchase.update',$purchase->id)); ?>"  id="myForm" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                      <input type="hidden" name="product_id" value="<?php echo e($purchase->product_id); ?>">
                      <div class="row">
                        <div class="form-group col-md-4">
                           <label for="purchase_no">Purchase_no</label>
                           <input type="text" name="purchase_no" class="form-control"  value="<?php echo e($purchase->purchase_no); ?>">
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('purchase_no'))?($errors->first('purchase_no')):' '); ?>

                           </font>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="supplier_id">Supplier Name</label>
                           <select  name="supplier_id" class="form-control">
                           <option value="">--Select Supplier Name--</option> 
                           <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <option value="<?php echo e($sup->id); ?>" <?php echo e(($purchase->supplier_id ==  $sup->id)?("selected"):""); ?>><?php echo e($sup->company_name); ?></option>  
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                           </select>
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('supplier_id'))?($errors->first('supplier_id')):' '); ?>

                           </font>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="category">Category</label>
                           <select  name="category_id" class="form-control" >
                            <option value="">--Select Category Name--</option> 
                           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <option value="<?php echo e($cat->id); ?>" <?php echo e(($purchase->category_id ==  $cat->id)?("selected"):""); ?>><?php echo e($cat->category_name); ?></option>  
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                           </select>
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('category_id'))?($errors->first('category_id')):' '); ?>

                           </font>
                        </div>
                         <div class="form-group col-md-4">
                           <label for="purchase_date">Purchase Date</label>
                           <input type="text" name="purchase_date" class="form-control"  value="<?php echo e($purchase->purchase_date); ?>">
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('purchase_date'))?($errors->first('purchase_date')):' '); ?>

                           </font>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="buying_qty">Buying Quantity</label>
                           <input type="text" name="buying_qty" class="form-control"  value="<?php echo e($purchase->buying_qty); ?>">
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('buying_qty'))?($errors->first('buying_qty')):' '); ?>

                           </font>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="unit_price">Unit Price</label>
                           <input type="text" name="unit_price" class="form-control"  value="<?php echo e($purchase->unit_price); ?>">
                           <font style="color:#e60000">
                                 <?php echo e(($errors->has('unit_price'))?($errors->first('unit_price')):' '); ?>

                           </font>
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 30px;">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary ">
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/purchase/edit.blade.php ENDPATH**/ ?>