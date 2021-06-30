<!DOCTYPE html>
<html>
<head><title>Daily Purchase Report</title>
<style>
 #border {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#border td, #border th {
  border: 1px solid #ddd;
  padding: 8px;
}

#border tr:nth-child(even){background-color: #f2f2f2;} 
</style>

</head>	
<body>
      <div class="container">
     	 <div class="row">
     	 	<div class="col-md-12">
     	 		<table width="100%">
     	 			<tbody>
     	 				 <tr>
                <td style="text-align: center;" colspan="2"><h3>Company Name: Nashrava</h3></td>
              </tr>
              <tr>
                <td style="text-align: center;" colspan="2"><p>Address: House# 03(4th floor), Road# 19, Sector# 13, Uttara, Dhaka-1230.<br/>Phone Number: 01309286974<br/>E-mail: support@nashrava.co</p></td>
              </tr>
     	 			</tbody>
     	 		</table>
     	 	</div>
     	 </div>
     </div>
     <br/>
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <table width="100%">
            <tbody>
                 <tr>
                <td>
                  <p>Daily Purchase Report (<?php echo e(date('d-m-Y',strtotime($start_date))); ?> to <?php echo e(date('d-m-Y',strtotime($end_date))); ?>)</p>    
                </td>
                <td style="text-align: right"> 
                  <?php
                  $date = new DateTime('now',new DateTimezone('Asia/Dhaka'));
                  ?>
                  <i >Date : <?php echo e($date->format('j F,Y,g:i a')); ?></i></td>
              </tr>
            </tbody>
          </table>
        </div>
       </div>
     </div>
     <hr/>
     <br/>
      <div class="container">
       <div class="row">
          <table id="border"  width="100%" >
                    <thead>
                      <tr >
                        <th width="5%">SL.</th>
                        <th width="20%">Purchase No</th>
                        <th width="20%">Product Name</th>
                        <th width="15%">Purchase Date</th>
                        <th width="12%">Buying Quantity</th>
                        <th width="12%">Unit Price</th>
                        <th width="12%">Total Price</th>
                      </tr> 
                    </thead>
                    <tbody>
                      <?php
                         $total_sum = '0';
                      ?>
                      <?php $__currentLoopData = $daily_purchase_report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td># <?php echo e($key+1); ?></td>
                        <td><?php echo e($purchase->purchase_no); ?></td>
                        <td><?php echo e($purchase->product_name); ?></td>
                        <td><?php echo e(date('d-m-Y',strtotime($purchase->purchase_date))); ?></td>
                         <td style="text-align: center;background-color:orange"><?php echo e($purchase->buying_qty); ?>

                        </td>
                        <td style="text-align: center;background-color:orange"><?php echo e($purchase->unit_price); ?></td>
                        <td style="text-align: center;background-color:orange"><?php echo e($purchase->buying_price); ?></td>
                        <?php
                           $total_sum += $purchase->buying_price;
                        ?>
                      </tr> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                        <td colspan="6" style="text-align: right"><strong>Grand Total</strong></td>
                        <td style="background-color: #1c95eb;color: black;font-weight: bold"><?php echo e($total_sum); ?></td>
                      </tr>
                    </tbody>  
          </table>
       </div>
     </div>
    <br/>
     <div style="height:50px;"></div>
     <div class="container">
     	 <div class="row">
     	 	<div class="col-md-12">
     	 		<table width="100%">
     	 			<tbody>
     	 				<tr>
     	 					<td style="width:40%">
     	 						
     	 					</td>
     	 					<td style="width:20%"></td>
     	 					<td style="width:40%;text-align: center;">
     	 						<p style="text-align: center;border-top: 1px solid #000;">Owner Signature</p>
     	 					</td>
     	 				</tr>
     	 			</tbody>
     	 		</table>
     	 	</div>
     	 </div>
     </div>
</body>
</html><?php /**PATH F:\xampp\htdocs\nashravaco\resources\views/backend/pdf/daily-purchase-report-pdf.blade.php ENDPATH**/ ?>