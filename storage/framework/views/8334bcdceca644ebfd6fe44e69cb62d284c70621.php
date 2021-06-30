
<?php $__env->startSection('css'); ?>
<style type="text/css">
  
        #login .container #login-row #login-column #login-box {
                margin-top: 40px;
                max-width: 600px;
              
                border: 1px solid #9C9C9C;
                background-color: #EAEAEA;
                margin-bottom: 40px;
      }

      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }

      #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
      }

  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- End Header -->
<div id="main-content-area" class="padtop80 padbot25 my2">
      
       <div id="login" style="background-color:white;">
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" >
                        <form id="login-form" class="form" action="<?php echo e(route('login')); ?>" method="post">
                          <?php echo csrf_field(); ?>
                           <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <strong><?php echo e($error); ?></strong><br/>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>

                          <?php if(Session::get('message')): ?>
                            <div class="alert alert-danger alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong><?php echo e(Session::get('message')); ?></strong><br/>
                           </div>
                        <?php endif; ?>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label  class="text-info" style="font-weight: bold;">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Please Enter Your Valid Email Address">
                            </div>
                            <div class="form-group">
                                <label  class="text-info" style="font-weight: bold;">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Please Enter Valid Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login" style="background-color:#e35614">
                                <i class="fa fa-user" ></i> No account yet ? <a href="<?php echo e(route('customer.signup')); ?>"><span  style="font-weight: bold;">Signup new account</span></a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/frontend/single_page/customer/customer-login.blade.php ENDPATH**/ ?>