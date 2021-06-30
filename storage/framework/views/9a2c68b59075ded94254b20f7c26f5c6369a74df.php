 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_stock')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.stock')); ?></li>
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
                <h3><?php echo e(__('back_blade.view_stock_list')); ?></h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-sm table-striped table-bordered table-hover table-responsive" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="5%">SL.</th>
                        <th width="13%">Product Name</th>
                        <th width="10%">Category</th>
                        <th width="10%">Sub Category</th>
                        <th width="13%">Brand</th>
                        <th width="13%">Price</th>
                        <th width="13%">Opening Stock</th>
                        <th width="13%">Current Stcok</th>
                        <th width="10%">Action</th>
                      </tr> 
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $stock_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($stock->product_name); ?></td>
                        <td><?php echo e($stock->category->category_name); ?></td>
                        <td><?php echo e($stock->subCategory->sub_category_name); ?></td>
                        <td><?php echo e($stock->brand->brand_name); ?></td>
                        <td><?php echo e($stock->price); ?></td>
                        <td><?php echo e($stock->purchase->buying_qty); ?></td>
                        <td><?php echo e($stock->qty); ?></td>
                        <td>
                          <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('stock.edit',$stock->id)); ?>"><i class="fa fa-edit"></i></a>
                        </td>
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                   <!--  -->
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/stock/index.blade.php ENDPATH**/ ?>