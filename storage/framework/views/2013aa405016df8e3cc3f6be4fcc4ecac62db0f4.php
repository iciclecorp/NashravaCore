 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_category')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.category')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_category_list')); ?>

                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('category.create')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;<?php echo e(__('back_blade.view_category_add')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="10%">SL.</th>
                        <th width="30%">Category Name</th>
                        <th width="25%">Image</th>
                        <th width="20%">Status</th>
                        <th width="15%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $category_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($cat_info->category_name); ?></td>
                        <td><img src="<?php echo e((!empty($cat_info->category_image))?url($cat_info->category_image):url('public/upload/no image found.jpg')); ?>" width="130px" height="80px" ></td>
                        <td>
                            &nbsp;&nbsp; &nbsp;&nbsp;
                            <?php if($cat_info->status == '1'): ?>
                              <a style="color:white;padding-right:30px;border-radius: 5px;"  class="btn btn-success btn-sm" href="<?php echo e(route('change.category.status',$cat_info->id)); ?>">Active</a>
                            <?php else: ?>
                              <a style="color:white;padding-right:17px;border-radius: 5px;"  class="btn btn-danger btn-sm" href="<?php echo e(route('change.category.status',$cat_info->id)); ?>">Deactive</a>
                            <?php endif; ?> 
                        </td>
                        <td>
                           <?php
                           $count_cat = App\Model\Product::where('category_id',$cat_info->id)->count();
                           $count_purchase_cat = App\Model\Purchase::where('category_id',$cat_info->id)->count();
                           ?>
                           <div class="row">
                             &nbsp;&nbsp; &nbsp;&nbsp;
                              <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('category.edit',$cat_info->id)); ?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                              <?php if($count_cat < 1 &&  $count_purchase_cat < 1): ?>
                                <form action="<?php echo e(route('category.destroy',$cat_info->id)); ?>" method="post">
                                   <?php echo csrf_field(); ?>
                                   <?php echo method_field('delete'); ?>
                                  <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></a>
                                </form>
                              <?php endif; ?>  
                          </div>

                        </td>
                        
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>   

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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/category/index.blade.php ENDPATH**/ ?>