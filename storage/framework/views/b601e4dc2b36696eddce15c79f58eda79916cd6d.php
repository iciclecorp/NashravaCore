 
 <?php $__env->startSection('sidebar'); ?>
 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:#1c1c1c;">
   <!-- Brand Logo -->
    <a href="<?php echo e(url('/admin/home')); ?>" class="brand-link" >
      <img src="<?php echo e(asset('public/backend')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="background-color:#1c1c1c;">
        <div class="image">
          <img src="<?php echo e(asset('public/backend')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Md Shaykat Ali</a>
        </div>
      </div>
     <?php if(Request::is('admin*')): ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item has-treeview <?php if(Request::is('admin/order') || Request::is('admin/pending-list') || Request::is('admin/approve-list')): ?>
           menu-open
          <?php endif; ?>" id="side_order" style="display:none;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               Order Management 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" class="side_order">
              <li class="nav-item">
                <a href="<?php echo e(route('order.pending.list')); ?>" class="nav-link <?php echo e(Request::is('admin/pending-list') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Pending Orders</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview" class="side_order">
              <li class="nav-item">
                <a href="<?php echo e(route('order.approve.list')); ?>" class="nav-link <?php echo e(Request::is('admin/approve-list') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Approves Orders</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
     <?php endif; ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">home</a></li>
              <li class="breadcrumb-item active">order</li>
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
                <h3> Pending Order List </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               <table id="example1" class="table table-sm table-bordered table-hover" style="color:#00004d">
                    <thead>
                      <tr>
                          <th width="5%">SL.</th>
                          <th width="5%">Order No</th>
                          <th width="25%">Total Amount</th>
                          <th width="35%">Payment Type</th>
                          <th width="15%">Status</th>
                          <th width="15%">Action</th>
                      </tr> 
                    </thead>
                    <tbody style="color: #4d0026">
                      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td># <?php echo e($key + 1); ?></td>
                             <td># <?php echo e($order->order_no); ?></td>
                            <td><?php echo e($order->order_total_amount); ?></td>
                            <td>
                              <?php echo e($order->payment->payment_method); ?>

                               <?php if($order->payment->payment_method == 'Bkash'): ?>
                                 (Transaction no:<?php echo e($order->payment->transaction_no); ?>)
                               <?php endif; ?>
                            </td>
                            <td>
                              <?php if($order->status == '0'): ?>
                              <span style="background-color: red;color:white;padding: 5px;border-radius:5px">Pending</span>
                              <?php elseif($order->status == '1'): ?>
                              <span style="background-color: green;color:white;padding: 5px;border-radius:5px">Approved</span>
                              <?php endif; ?>
                            </td>
                            <td>
                              <div class="row">
                                <a title="Details" href="<?php echo e(route('order.details',$order->id)); ?>" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;      
                               <a title="Approve" href="<?php echo e(route('order.approve',$order->id)); ?>" class="btn btn-success btn-sm approveBtn" ><i class="fa fa-check-circle"></i></a>&nbsp;&nbsp;
                                <form action="<?php echo e(route('order.destroy',$order->id)); ?>" method="post">
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
  <script type="text/javascript">
    $(function(){
           $('.delete-confirm').click(function(event) {
              var form = $(this).closest("form");
              event.preventDefault();
              Swal.fire({
              title: 'Are you sure?',
              text: "You want to Delete Data",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed){
                   form.submit();
                 // window.location.href = link;
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })

    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/order/pending-list.blade.php ENDPATH**/ ?>