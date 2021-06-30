    
 <?php $__env->startSection('content'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:#d3dede">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li class="breadcrumb-item active" style="color:#ff3300">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>User List
                  <a class="btn btn-success float-right btn-sm" href="<?php echo e(route('user.create')); ?>"><i class="fa fa-plus-circle"></i>Add User</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                   <table id="example1" class="table table-bordered table-hover table-responsive" style="color:#00004d">
                    <thead>
                      <tr>
                        <th width="5%">SL.</th>
                        <th width="25%">Usertype</th>
                        <th width="30%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $user_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($user->user_type); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <div class="row">
                                <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('user.edit',$user->id)); ?>"><i class="fa fa-edit"></i></a>&nbsp;
                               
                                <form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                                  <a href="javascript:void(0)" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></a>
                                </form>
                               
                            </div>
                        </td> 
                        
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>  

                   </table>
               
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
  <!-- /.content-wrapper -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/user/index.blade.php ENDPATH**/ ?>