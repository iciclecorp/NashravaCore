
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li class="breadcrumb-item active" style="color:#ff3300">Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12" >
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card" >
              <div class="card-header">
               <h3 style="color:deeppink">Edit Slider

               <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('slider.index')); ?>"><i class="fa fa-list"></i>Sliders List</a>
               </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
              
              <form  method="post" action="<?php echo e(route('slider.update',$data->id)); ?>"  id="myForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>

                  <div class="form-group col-md-6">
                              <label for="slider_name">Slider Name</label>
                              <input type="text" name="slider_name" class="form-control" value="<?php echo e($data->slider_name); ?>">
                             
                          </div>
                        
                       <div class="form-group col-md-6">
                           <label for="image">Image</label>
                           <input type="file" name="image" class="form-control" id="image">
                            
                       </div>
                        <div class="form-group col-md-4">
                           
                           <img id="showImage" src="<?php echo e((!empty($data->image))?url('public/upload/slider_image/'.$data->image):url('public/upload/no image found.jpg')); ?>" style="width:150px;height:160px;border:1px solid #000;">
                       </div>
                 
                 
                  <div class="form-group col-md-6">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                 </div>
                  

              </form>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </section>
          
              
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  


    <!-- /.content -->
  
  </div>
  <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/slider/edit.blade.php ENDPATH**/ ?>