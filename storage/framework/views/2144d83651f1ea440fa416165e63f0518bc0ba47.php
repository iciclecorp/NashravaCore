
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:#1c1c1c;">
   <!-- Brand Logo -->
    <a href="<?php echo e(url('/admin/home')); ?>" class="brand-link" >
      <img src="<?php echo e(asset('public/backend')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nashrava</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="background-color:#1c1c1c;">
        <div class="image">
          <img src="<?php echo e(asset('public/backend')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nashrava</a>
        </div>
      </div>
     <?php if(Request::is('admin*')): ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview  <?php if(Request::is('admin/user')): ?>
           menu-open
          <?php endif; ?>" class="side_user" >

            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_user')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('user.index')); ?>" class="nav-link <?php echo e(Request::is('admin/user') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_user')); ?></p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview  <?php if(Request::is('admin/profile') || Request::is('admin/view-password')): ?>
           menu-open
          <?php endif; ?>" id="profile">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_profile')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('profile.index')); ?>" class="nav-link <?php echo e(Request::is('admin/profile') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_profile')); ?></p>
                </a>
              </li>

            </ul>

              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('view.password')); ?>" class="nav-link <?php echo e(Request::is('admin/view-password') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.change_pass')); ?></p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview <?php if(Request::is('admin/category') || Request::is('admin/sub-category')): ?>
           menu-open
          <?php endif; ?>" id="side_category" >
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_category')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('category.index')); ?>" class="nav-link <?php echo e(Request::is('admin/category') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_category')); ?></p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('sub-category.index')); ?>" class="nav-link <?php echo e(Request::is('admin/sub-category') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_sub_category')); ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="<?php echo e(route('newarrival.index')); ?>" class="nav-link <?php echo e(Request::is('admin/new_arrival/products') ? 'active' : ''); ?>">
                  <i class="fas fa-copy nav-icon"></i>
                  <p style="color:#ffffff;">New Arrivals</p>
                </a>
              </li>
          <li class="nav-item has-treeview  <?php if(Request::is('admin/product') || Request::is('admin/product-measurement') ): ?>
           menu-open
          <?php endif; ?>" id="side_product" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_product')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('product.index')); ?>" class="nav-link <?php echo e(Request::is('admin/product') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_product')); ?></p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('product-measurement.index')); ?>" class="nav-link <?php echo e(Request::is('admin/product-measurement') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Product Measurement</p>
                </a>
              </li>
            </ul>
            
          </li>
           <li class="nav-item has-treeview  <?php if(Request::is('admin/invoice') ): ?>
           menu-open
          <?php endif; ?>" id="side_product" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
              Invoice Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('invoice.index')); ?>" class="nav-link <?php echo e(Request::is('admin/invoice') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">View Invoice</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(Request::is('admin/shipping-cost') ): ?>
           menu-open
          <?php endif; ?>" id="side_stock" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               Shipping Cost Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('shipping-cost.index')); ?>" class="nav-link <?php echo e(Request::is('admin/shipping-cost') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">view shipping-cost</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview <?php if(Request::is('admin/stock') ): ?>
           menu-open
          <?php endif; ?>" id="side_stock" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_stock')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('stock.index')); ?>" class="nav-link <?php echo e(Request::is('admin/stock') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_stock')); ?></p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview <?php if(Request::is('admin/order') || Request::is('admin/pending-list') || Request::is('admin/approve-list')): ?>
           menu-open
          <?php endif; ?>" id="side_order" >
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

          <li class="nav-item has-treeview <?php if(Request::is('admin/customer/index') || Request::is('admin/customer/draft/view') || Request::is('admin/local/customer/view') || Request::is('admin/local/customer/due-list')): ?>
           menu-open
          <?php endif; ?>" id="side_customer" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_customer')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('customer.index')); ?>" class="nav-link <?php echo e(Request::is('admin/customer/index') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_customer')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('draft.customer')); ?>" class="nav-link <?php echo e(Request::is('admin/customer/draft/view') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.draft_customer')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('local.customer')); ?>" class="nav-link <?php echo e(Request::is('admin/local/customer/view') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Local Customer View</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('local.customer.due.list')); ?>" class="nav-link <?php echo e(Request::is('admin/local/customer/due-list') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Local Customer Due List</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview  <?php if(Request::is('admin/purchase')): ?>
           menu-open
          <?php endif; ?>" id="side_purchase" >
            <a href="#" class="nav-link <?php echo e(Request::is('admin/purchase') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#FFFFFF">
              Purchase Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('purchase.index')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: #FFFF00"><?php echo e(__('sidebar.view_purchase')); ?></p>
                </a>
              </li>
            </ul>

            
          </li>
           <li class="nav-item has-treeview <?php if(Request::is('admin/purchase/daily/report') || Request::is('admin/stock/report') || Request::is('admin/invoice/daily/report') ||  Request::is('admin/local/invoice/daily/report') ): ?> 

           menu-open
          <?php endif; ?>" id="side_report" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               All Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('purchase.report')); ?>" class="nav-link <?php echo e(Request::is('admin/purchase/daily/report') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Purchase Report</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('stock.report')); ?>" class="nav-link <?php echo e(Request::is('admin/stock/report') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Stock Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('invoice.report')); ?>" class="nav-link <?php echo e(Request::is('admin/invoice/daily/report') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Selling Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?php echo e(route('local.invoice.report')); ?>" class="nav-link <?php echo e(Request::is('admin/local/invoice/daily/report') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">Local Selling Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if(Request::is('admin/color') || Request::is('admin/size') || Request::is('admin/size-measurement') || Request::is('admin/coupons') || Request::is('admin/supplier') || Request::is('admin/unit') || Request::is('admin/slider') || Request::is('admin/brand')): ?>
           menu-open
          <?php endif; ?>" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p style="color:#ffffff;">
               <?php echo e(__('sidebar.manage_others')); ?>

                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('color.index')); ?>" class="nav-link <?php echo e(Request::is('admin/color') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_color')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('size.index')); ?>" class="nav-link <?php echo e(Request::is('admin/size') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_size')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('size-measurement.index')); ?>" class="nav-link <?php echo e(Request::is('admin/size-measurement') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">View Size Measurement</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('brand.index')); ?>" class="nav-link <?php echo e(Request::is('admin/brand') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_brand')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('slider.index')); ?>" class="nav-link <?php echo e(Request::is('admin/slider') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;">View Slider</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('coupons.index')); ?>" class="nav-link <?php echo e(Request::is('admin/coupons') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_coupon')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('supplier.index')); ?>" class="nav-link <?php echo e(Request::is('admin/supplier') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_supplier')); ?></p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('unit.index')); ?>" class="nav-link <?php echo e(Request::is('admin/unit') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:#faf619;"><?php echo e(__('sidebar.view_unit')); ?></p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item ">
                <a href="<?php echo e(route('application.setting')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p style="<?php echo e(Request::is('*/setting') ? 'color:#faf619;' : ''); ?>">Application Setting</p>
                </a>
            </li>
        </ul>
      </nav>
     <?php endif; ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript">

      $("#side_order").click(function(){

          // $('#profile').hide();
          // $('#category').hide();
          //  $('#product').hide();
          //   $('#stock').hide();
          //    $('.side_order').show();
          //     $('#customer').hide();
          //     $('#purchase').hide();

      });

  </script>
<?php /**PATH F:\xampp\htdocs\NashravaCore\resources\views/backend/layout/sidebar.blade.php ENDPATH**/ ?>