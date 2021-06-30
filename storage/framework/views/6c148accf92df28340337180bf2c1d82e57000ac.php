 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_product')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.product')); ?></li>
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
          <section class=" content col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3><?php echo e(__('back_blade.view_product_edit')); ?>

                  <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('product.index')); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp;<?php echo e(__('back_blade.view_product_list')); ?></a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form  method="post" action="<?php echo e(route('product.update',$product->id)); ?>" class="form-horizontal" id="myForm" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PATCH'); ?>
                  <div class="row">
                   <section class="col-md-5">
                    <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header">
                        <h4>Categories</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                              <!-- form start -->
                              <div class=" form-group col-md-12">
                                  <select name="category_id" id="category" class="form-control form-control-sm " required>
                                      <option value="">Select Category</option>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e(($product->category_id == $category->id)?'selected':''); ?>><?php echo e($category->category_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              </div>
                             <!--  <div class="form-group new_category col-md-12" style="display:none;">
                                <input type="text" name="category_id" id="category_name" class="form-control form-control-sm" placeholder="Enter Category Name"  style="border:2px solid #007bff">
                              </div> -->
                         
                              <div class="form-group col-md-12">
                                <select name="sub_category_id" id="sub_category" class="form-control-sm form-control" required>
                                    <option value="">Select Sub Category</option>
                                    <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($sub_category->id); ?>" <?php echo e($product->sub_category_id == $sub_category->id ? 'selected' : ''); ?>><?php echo e($sub_category->sub_category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>            
                        </div>
                      </div>
                    </div>
                    <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header"> 
                          <h4>Brand</h4>
                      </div>
                      <div class="card-body">
                        <div class='form-group col-md-12'>
                            <select name="brand_id" id="brand_id" class="form-control form-control-sm" required>
                                <option value="">Select Brand</option>
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($brand->id); ?>" <?php echo e(($product->brand_id == $brand->id)?'selected':''); ?>><?php echo e($brand->brand_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> 
                        </div>
                       <!--  <div class="form-group new_brand col-md-12" style="display:none;">
                            <input type="text" name="brand_id" id="brand_name" class="form-control form-control-sm" placeholder="Enter Brand Name"  style="border:2px solid #007bff">
                        </div> -->  
                      </div>
                    </div>
                    <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header"> 
                          <h4>Image</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group col-md-12">
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                            <font style="color:#e60000">
                                  <?php echo e(($errors->has('image'))?($errors->first('image')):' '); ?>

                            </font>
                        </div>
                        <div class="form-group col-md-4"  id="show">
                          <img id="showImage" src="<?php echo e((!empty($product->image))?url($product->image):url('public/upload/image_avatar.jpg')); ?>" style="width:150px;height:160px;border:1px solid #000;">
                        </div>
                      </div>
                    </div>
                     <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header"> 
                          <h4> Sub Image (Multiple Image)</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group col-md-12">
                          <input type="file" name="sub_image[]"  class="form-control form-control-sm" multiple>
                        </div>
                      </div><br/>
                       <div style="height:32px;"></div>
                    </div>
                   </section>
                   <section class='content col-md-7'>
                    <div class="card" style="border-top:5px solid #007bff;">
                      <div class='card-header'>
                          <h4>Product Information</h4>
                      </div>
                      <div class="card-body">
                    <!-- form start -->
                          <div class="form-group">
                                <div class="form-row">
                                    <label for="title" class="col-md-3 control-label">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="product_name" id="title" class="form-control form-control-sm" value="<?php echo e($product->product_name); ?>" required>
                                        <font style="color:#e60000">
                                         <?php echo e(($errors->has('product_name'))?($errors->first('product_name')):' '); ?>

                                        </font>
                                    </div>
                                </div><br/>
                                <div class="form-row">
                                    <label for="title" class="col-md-3 control-label">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="title" id="title" class="form-control form-control-sm" value="<?php echo e($product->title); ?>" required>
                                         <font style="color:#e60000">
                                         <?php echo e(($errors->has('title'))?($errors->first('title')):' '); ?>

                                        </font>
                                    </div>
                                </div><br/> 
                                <div class="form-row">
                                    <label for="slug" class="col-md-3 control-label">Slug</label>
                                    <div class="col-md-9">
                                        <input type="text" name="slug"  class="form-control form-control-sm" value="<?php echo e($product->slug); ?>" required>
                                         <font style="color:#e60000">
                                         <?php echo e(($errors->has('slug'))?($errors->first('slug')):' '); ?>

                                        </font>
                                    </div>
                                </div><br/> 
                                <div class="form-row">
                                    <label for="url" class="col-md-3 control-label">Price</label>
                                    <div class="col-md-5">
                                        <input type="number" name="price" class="form-control form-control-sm" value="<?php echo e($product->price); ?>"  required>
                                        <font style="color:#e60000">
                                         <?php echo e(($errors->has('price'))?($errors->first('price')):' '); ?>

                                        </font>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="discount" class="form-control form-control-sm" id="" value="<?php echo e($product->discount); ?>">
                                    </div>
                                </div><br/>
                                <div class="form-row">
                                    <label for="quantity" class="col-md-3 control-label">Quantity</label>
                                    <div class="col-md-9">
                                        <input  type="number" class="form-control form-control-sm" name="qty" value="<?php echo e($product->qty); ?>" required>
                                        <font style="color:#e60000">
                                         <?php echo e(($errors->has('qty'))?($errors->first('qty')):' '); ?>

                                        </font>
                                    </div>
                                </div><br/>
                                <div class="form-row">
                                    <label for="details" class="col-md-3 control-label">Details</label>
                                    <div class="col-md-9">
                                        <textarea name="details" rows="4" class="form-control form-control-sm" required><?php echo e($product->details); ?></textarea>
                                        <font style="color:#e60000">
                                         <?php echo e(($errors->has('details'))?($errors->first('details')):' '); ?>

                                        </font>
                                    </div>
                                </div><br/> 
                                                                 
                          </div>  
                      </div>
                        </div>
                         <div class="card" style="border-top:5px solid #007bff;">
                      <div class="card-header"> 
                          <h4>Color & Size</h4>
                      </div>
                      <div class="card-body">
                        <div class='form-group col-md-12'>
                            <select name="color_id[]" id="color_id" class="form-control form-control-sm select2" multiple >
                                <option value="">Select Color</option>
                                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($color->id); ?>" <?php echo e((@in_array(['color_id'  =>$color->id],$color_array))?"selected":" "); ?>><?php echo e($color->color_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> 
                        </div>
                        <div class='form-group col-md-12'>
                            <select name="size_id[]" id="size_id" class="form-control form-control-sm select2 " multiple>
                                <option value="">Select Size</option>
                                <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($size->id); ?>" <?php echo e((@in_array(['size_id'  =>$size->id],$size_array))?"selected":" "); ?>><?php echo e($size->size_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> 
                        </div>  
                      </div>
                    </div>
                      <div class="col-md-10" style="text-align: center">
                        <button type="submit" class="btn btn-primary">Update</button>
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
<script>
  $(document).on('change','#category',function(){
    var category_id = $(this).val();
    if(category_id == '0'){
        $('.new_category').show();
    }else{
        $('.new_category').hide();
    }

 }); 

  $(document).on('change','#brand_id',function(){
    var brand_id = $(this).val();
    if(brand_id == '0'){
        $('.new_brand').show();
    }else{
        $('.new_brand').hide();
    }

 }); 

 
  $(document).on('click','#image',function(){

        $('#show').show();
   
 });

  // Get sub Sub category by Sub Category
    $("#sub_category").on('change',function () {
        var sub_category = $("#sub_category").val();
       
    }); 

   $(document).on('change','#category',function(){
     var category_id = $(this).val();
     console.log( category_id);
      $.ajax({
        url:"<?php echo e(route('get-sub-category')); ?>",
        dataType:'json', 
        type:"GET",
        data:{category_id:category_id},
        success:function(data){
          var html = '';
          $.each(data,function(key,v){
              html += '<option value = "'+v.id+'">'+v.sub_category_name+'</option>';
              
          });
          $('#sub_category').html(html);
        }

     });

  });

</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/product/edit.blade.php ENDPATH**/ ?>