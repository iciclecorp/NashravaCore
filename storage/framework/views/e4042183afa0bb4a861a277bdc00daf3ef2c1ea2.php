<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>
  <title>Nashrava</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- jQuery -->
  <script src="<?php echo e(asset('public/backend')); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!--Datepicker-->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('public/backend')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- notify -->
  <style type="text/css">
     .notifyjs-corner{
     z-index: 10000 !important;
  }
  </style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
 <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #505F6D;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/admin/home')); ?>" class="nav-link"><strong style="color:white">Home</strong></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span><strong style="color:white"><?php echo e(Auth::user()->name); ?></strong></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a  href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
          class="dropdown-item dropdown-footer">Logout</a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
              </form>

        </div>
      </li>
    </ul>
  </nav>

  <!-- /.navbar -->
    <?php if( Request::is('admin/product') || Request::is('admin/product/*') || Request::is('admin/product/create') || Request::is('admin/product-measurement') || Request::is('admin/product-measurement/*') || Request::is('admin/product-measurement/create')): ?>
    <?php echo $__env->make('backend.layout.sidebar_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/invoice') || Request::is('admin/invoice/*') || Request::is('admin/invoice/create') ): ?>
    <?php echo $__env->make('backend.layout.sidebar_invoice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/user') || Request::is('admin/user/*') || Request::is('admin/user/create') || Request::is('admin/profile') || Request::is('admin/profile/*') || Request::is('admin/view-password') || Request::is('admin/customer.password.update')): ?>
    <?php echo $__env->make('backend.layout.sidebar_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <?php elseif( Request::is('admin/user') || Request::is('admin/user/*') || Request::is('admin/user/create') ): ?>

    <?php elseif( Request::is('admin/purchase') || Request::is('admin/pruchase/*') || Request::is('admin/purchase/create') ): ?>
    <?php echo $__env->make('backend.layout.sidebar_purchase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/category') || Request::is('admin/category/*') || Request::is('admin/category/create') || Request::is('admin/category-cart') ||  Request::is('admin/sub-category') || Request::is('admin/sub-category/*') || Request::is('admin/sub-category/create')): ?> 
    <?php echo $__env->make('backend.layout.sidebar_category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php elseif( Request::is('admin/customer/index') || Request::is('admin/customer-cart') ||  Request::is('admin/customer/draft/view') || Request::is('admin/local/customer/view') || Request::is('admin/local/customer/due-list') || Request::is('admin/local/customer/edit/invoice/*') ): ?>
    <?php echo $__env->make('backend.layout.sidebar_customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/order') || Request::is('admin/pending-list') || Request::is('admin/approve-list') || Request::is('admin/order-cart') || Request::is('admin/details/*') ): ?>
    <?php echo $__env->make('backend.layout.sidebar_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php elseif( Request::is('admin/purchase/daily/report') || Request::is('admin/stock/report') || Request::is('admin/invoice/daily/report') || Request::is('admin/local/invoice/daily/report') ): ?>
    <?php echo $__env->make('backend.layout.sidebar-report', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/color') || Request::is('admin/color/create') || Request::is('admin/color/*') ||  Request::is('admin/size')  || Request::is('admin/size/create')  || Request::is('admin/size/*') || Request::is('admin/size-measurement') || Request::is('admin/size-measurement/create') || Request::is('admin/size-measurement/*') || Request::is('admin/brand')  || Request::is('admin/brand/create') || Request::is('admin/brand/*') || Request::is('admin/slider') || Request::is('admin/slider/create') || Request::is('admin/slider/*') || Request::is('admin/supplier') || Request::is('admin/supplier/create') || Request::is('admin/supplier/*') || Request::is('admin/unit') || Request::is('admin/unit/create') || Request::is('admin/unit/*') || Request::is('admin/other-cart') ): ?>
    <?php echo $__env->make('backend.layout.sidebar-other', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif( Request::is('admin/stock') ): ?>
    <?php echo $__env->make('backend.layout.sidebar_stock', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php else: ?>

 <?php echo $__env->make('backend.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
   



  <?php echo $__env->yieldContent('content'); ?>
  <?php if(session()->has('success')): ?>
   <script type="text/javascript">
      $(function(){

         $.notify("<?php echo e(session()->get('success')); ?>",{globalPosition:'top right',className:'success'})
      });

   </script>
   <?php endif; ?>
    <?php if(session()->has('error')): ?>
   <script type="text/javascript">
      $(function(){

         $.notify("<?php echo e(session()->get('error')); ?>",{globalPosition:'top right',className:'error'})
      });

   </script>
   <?php endif; ?>
  <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->
  <?php echo $__env->yieldContent('js'); ?>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('public/backend')); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('public/backend')); ?>/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo e(asset('public/backend')); ?>/plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('public/purchase_js')); ?>/handlebars.min.js"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('public/backend')); ?>/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive":true,
      "autoWidth": true,
       "ordering":false,
      "lengthChange": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth":true,
      "responsive": false,
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader= new FileReader();
      reader.onload=function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
   
     });
  });
  </script>


<!-- approve -->
<script type="text/javascript">
    $(function(){

      $(document).on('click','.approveBtn',function(e){
          e.preventDefault();
          var link = $(this).attr('href');
           Swal.fire({
              title: 'Are you sure?',
              text: "You want to Approve Data",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, approve it!'
            }).then((result) => {
              if (result.value){
                   // form.submit();
               window.location.href = link;
                Swal.fire(
                  'Approved!',
                  'Your file has been approved.',
                  'success'
                )
              }
            })
      });
  });
</script>
<!-- delete -->
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
<script type="text/javascript">
  $(function(){
     //Initialize Select2 Elements
    $('.select2').select2();
  })
</script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader= new FileReader();
      reader.onload=function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
   
     });
  });
  </script>

  <script type="text/javascript">
    $(function(){

      $(document).on('click','.deleteBtn',function(e){
          e.preventDefault();
          var link = $(this).attr('href');
           Swal.fire({
              title: 'Are you sure?',
              text: "You want to Delete Data",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
              if (result.value){
                   // form.submit();
                window.location.href = link;
                Swal.fire(
                  'Deleted!',
                  'Your file has been Deleted.',
                  'success'
                )
              }
            })
      });
  });
</script>
<!-- for status change -->
<script>
function show_status(_this, id) {
    var status = $(_this).prop('checked') == true ? 1 : 0;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: `coupon-status-change/`,
        type: 'post',
        data: {
            _token: _token,
            id: id,
            status: status 
        },
        success: function (result) {
        }
    });
}

</script>



</body>
</html>
<?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/backend/layout/master.blade.php ENDPATH**/ ?>