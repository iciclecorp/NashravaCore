 
 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('back_blade.manage_invoice')); ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('back_blade.home')); ?></a></li>
              <li class="breadcrumb-item active"><?php echo e(__('back_blade.invoice')); ?></li>
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
                <h4>Invoice No: #<?php echo e($invoice->invoice_no); ?> &nbsp;&nbsp;&nbsp;&nbsp;Date: (<?php echo e(date('d-m-Y',strtotime($invoice->date))); ?>)
                   <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('invoice.print',$invoice->id)); ?>" target="_blank"><i class="fa fa-print"></i>&nbsp;&nbsp;PDF</a>
                </h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php
                   $payment = App\Model\Invoice_Payment::where('invoice_id',$invoice->id)->first();
                   $payment_details = App\Model\Invoice_Payment_Detail::where('invoice_id',$invoice->id)->first();
                ?>
                <table width="100%">
                    <tbody style="color: #4d0026">
                      <tr>
                        <td width="15%"><p><strong>Customer Info : </strong></p></td>
                        <td width="25%"><p><strong>Name : </strong><?php echo e($payment->customer->customer_name); ?></p></td>
                        <td width="25%"><p><strong>Mobile No : </strong><?php echo e($payment->customer->mobile_no); ?></p></td>
                        <td width="35%"><p><strong>Address : </strong><?php echo e($payment->customer->address); ?></p></td>
                      </tr>
                      <tr>
                        <td width="100%" colspan="3"><p><strong>Transaction : </strong><?php echo e($payment_details->payment_type); ?></p></td>
                      </tr>
                    </tbody>  
                  </table>
                  <form action="<?php echo e(route('invoice.approval.store',$invoice->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <table class="table table-sm table-bordered "  width="100%">
                        <thead>
                          <tr class="text-center">
                            <th width="5%">SL.</th>
                            <th width="15%">Category</th>
                            <th width="20%">Product Name</th>
                            <th width="15%" class="text-center" style="background-color: #ddd;padding: 1px;">Current Stock</th>
                            <th width="15%">Quantity</th>
                            <th width="15%">Unit Price</th>
                            <th width="15%">Total Price</th>
                          </tr> 
                        </thead>
                        <tbody>
                          <?php
                            $total_sum = '0';
                          ?>
                          <?php $__currentLoopData = $invoice['invoiceDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class="text-center">
                            <input type="hidden" name="category_id[]" value="<?php echo e($details->category_id); ?>">
                            <input type="hidden" name="product_id[]" value="<?php echo e($details->product_id); ?>">
                            <input type="hidden" name="selling_qty[<?php echo e($details->id); ?>]" value="<?php echo e($details->selling_qty); ?>">
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($details->category->category_name); ?></td>
                            <td><?php echo e($details->product->product_name); ?></td>
                            <td class="text-center"><strong><?php echo e($details->product->quantity); ?></strong></td>
                            <td><?php echo e($details->selling_qty); ?></td>
                            <td><?php echo e($details->unit_price); ?></td>
                            <td><?php echo e($details->selling_price); ?></td>
                          </tr>
                          <?php
                            $total_sum += $details->selling_price;
                          ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Sub Total</strong></td>
                              <td style="background-color: #D8FDBA" ><strong><?php echo e($total_sum); ?></strong></td>
                          </tr > 
                          <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Discount</strong></td>
                              <td style="background-color: #D8FDBA" ><strong><?php echo e($payment->discount_amount); ?></strong></td>
                          </tr>
                           <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Vat</strong></td>
                              <td style="background-color: #D8FDBA" ><strong><?php echo e($payment->vat); ?></strong></td>
                          </tr>
                          <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Paid Amount</strong></td>
                              <td style="background-color: #D8FDBA" ><strong><?php echo e($payment->paid_amount); ?></strong></td>
                          </tr> 
                          <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Due Amount</strong></td>
                              <td style="background-color: #D8FDBA" ><strong><?php echo e($payment->due_amount); ?></strong></td>
                          </tr>
                          
                          <tr class="text-center">
                              <td colspan="6" class="text-right"><strong>Grand Total</strong></td>
                              <td style="background-color: #D8FDBA" ><strong>  
                                <?php echo e($payment->total_amount); ?>

                              </strong></td>
                          </tr> 
                        </tbody>  
                    </table>
                     <button class="btn btn-success" type="submit" style="margin-top: 5px;">Invoice Approve</button>
                  </form>
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
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/fjxufomy/public_html/nashravaco/resources/views/backend/invoice/invoice-approve.blade.php ENDPATH**/ ?>