 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Shipping Cost</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active">Shipping Cost</li>
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
                <h3>Shipping Cost List
                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('shipping-cost.create')); ?>"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Shipping</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="10%">SL.</th>
                        <th width="30%">Shipping Area</th>
                        <th width="25%">Shipping Cost</th>
                        <th width="15%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $shipping_costs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $shipping_cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($shipping_cost->shipping_area); ?></td>
                        <td><?php echo e($shipping_cost->shipping_cost); ?></td>
                        <td>
                           <div class="row">
                             &nbsp;&nbsp; &nbsp;&nbsp;
                              <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('shipping-cost.edit',$shipping_cost->id)); ?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/shipping-cost/index.blade.php ENDPATH**/ ?>