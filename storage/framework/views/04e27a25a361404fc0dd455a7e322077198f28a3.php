 
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
            <?php if(Session::has('success_message')): ?>
            <div>
              <?php echo e(Session::get('success_message')); ?>

            </div>
            <?php endif; ?>
            <div class="card">
              <div class="card-header">
                <h3><?php echo e(__('back_blade.view_coupon_add')); ?>

                  <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('coupons.index')); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;<?php echo e(__('back_blade.view_coupon_list')); ?></a>
                </h3>
              </div><!-- /.card-header -->
               <div class="card-body">
                <form  method="post" action="<?php echo e(route('coupons.store')); ?>" class="form-horizontal" id="myForm" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                   <section class="col-md-6">
                    <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header">
                        <h4>Coupon Option & Coupon Type</h4>
                      </div>
                      <div class="card-body ">
                        <div class="row">
                              <!-- form start -->
                               <label for="coupon_type" class="col-md-4">Coupon Option</label>
                              <div class=" form-group col-md-12 d-flex justify-content-between align-items-center">
                                 <span><input type="radio" name="coupon_option" id="automatic_coupon" value="Automatic">&nbsp;&nbsp;Automatic</span>
                                  <span><input type="radio" name="coupon_option" id="manual_coupon" value="Manual">&nbsp;&nbsp;Manual</span>
                              </div>
                            <div class='form-group col-md-12'style="display:none;" id="couponField">
                            <input type="text" name="coupon_code" id="coupon_code" class="form-control form-control-sm" placeholder="Enter Coupon Code">
                            </div>
                           
                             <label for="coupon_type" class="col-md-4">Coupon Type</label>
                            <div class=" form-group col-md-12 d-flex justify-content-between align-items-center">
                                 <span><input type="radio" name="coupon_type"  value="Multiple Times">&nbsp;&nbsp;Multiple Times</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <span><input type="radio" name="coupon_type" value="Single Times">&nbsp;&nbsp;Single Times</span>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                     <div class="card" style="border-top:5px solid #007bff;">
                      <div class='card-header'>
                        <h4>Amount Type & Amount</h4>
                      </div>
                      <div class="card-body">
                    <!-- form start -->
                        <div class="row">
                          <div class="col-md-12">
                            <label for="amount_type" class="col-md-4">Amount Type</label>
                            <div class=" form-group col-md-12 d-flex justify-content-between align-items-center">
                                 <span><input type="radio" name="amount_type"  value="Percentage">&nbsp;&nbsp;Percentage&nbsp;(in %)&nbsp;</span>
                                  <span><input type="radio" name="amount_type" value="Fixed">&nbsp;&nbsp;Fixed&nbsp;(in BDT OR USD)&nbsp;</span>
                            </div>
                            <label for="amount_type" class="col-md-4">Amount</label>
                            <div class='form-group col-md-12'>
                            <input type="text" name="amount" id="amount" class="form-control form-control-sm" placeholder="Enter Amount" required>
                            </div>            
                          </div>    
                        </div>
                      </div>
                    </div>
                   </section>
                   <section class='content col-md-6'>
                     <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header">
                        <h4>Select Sub Categories & Users</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                              <!-- form start -->
                              <div class=" form-row col-md-12">
                                <label for="$product" class="col-md-4">Product</label>
                                <div class="col-md-8">
                                  <select name="products[]" id="product" class="form-control select2" data-live-search="true" multiple="" required>
                                      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>            
                              </div><br/><br/>
                              <div class=" form-row col-md-12">
                                <label for="user" class="col-md-4">User</label>
                                <div class="col-md-8">
                                  <select name="users[]" class="form-control form-control-sm select2" multiple>
                                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user['email']); ?>"><?php echo e($user['email']); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>            
                              </div>
                            <div style="height:96px"></div>  
                      </div>
                    </div>
                  </div>
                     <div class="card" style="border-top:5px solid #007bff;">
                      <div class='card-header'>
                        <h4>Expiry Date</h4>
                      </div>
                      <div class="card-body">
                    <!-- form start -->
                        <input type="text" name="expiry_date"  class="form-control form-control-sm datepicker"  id="expiry_date" placeholder="MM-DD-YYYY"  readonly required>
                      </div>
                    </div>
                        <div class="col-md-10" style="text-align: center">
                          <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                       </section>  
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
 <?php $__env->startSection('js'); ?>
 <script type="text/javascript">
    $('#automatic_coupon').click(function(){
         $('#couponField').hide();
    });
      
    $('#manual_coupon').click(function(){
         $('#couponField').show();
    });

    //date picker
    $('.datepicker').datepicker({
      uiLibrary: 'bootstrap4',
    });
</script>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/backend/coupon/create.blade.php ENDPATH**/ ?>