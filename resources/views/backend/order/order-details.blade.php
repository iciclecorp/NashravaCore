 @extends('backend.layout.master')
 @section('content')
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
              <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
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
                <h3> Order Details Information </h3>
              
                 <span style="margin-right:3px;"><a class="btn btn-primary btn-sm float-right" href="{{route('order.approve.list')}}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Approved Order List</a></span>
          
            
                      <span><a class="btn btn-success btn-sm float-right" href="{{route('order.pending.list')}}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Pending Order List</a></span>
                 
              </div><!-- /.card-header -->
              <div class="card-body">
            <table class="txt-center myTable" width="100%" border="1">
               <tr>
                 <td width="20%">
                   <a href="{{url('')}}"><img src="{{url('public/frontend/logo/nashrava normal logo path.png')}}" alt="IMG-LOGO" style="width:150px;height:150px;padding : 5px 0px 5px 15px"></a>
                 </td>
                 <td colspan="2" width="50%" style="text-align: center;">
                    <h4><strong>Company Name: Nashrava</strong></h4>
                    <span><strong>Address:</strong>House# 03(4th floor), Road# 19, Sector# 13, Uttara, Dhaka-1230.</span><br/>
                   <span><strong>Phone Number: </strong>01309286974</span><br/>
                    <span><strong>Email:</strong>support@nashrava.co</span>
                   
                 </td>
                 <td width="30%" style="padding-left: 5px; text-align: center">
                   <strong>Order No: # {{$order->order_no}}</strong>
                 </td>
               </tr>
               <tr>
                <td style="padding-left: 5px;"><strong>Billing Info</strong></td>
                <td  style="text-align: left;padding-left: 5px;">
                  <strong >Name :&nbsp;</strong>{{$order->shipping->first_name}} {{$order->shipping->last_name}} <br/>
                  <strong >Mobile No :&nbsp;</strong>{{$order->shipping->mobile_no}}<br/>
                  <strong >Email :&nbsp;</strong>{{$order->shipping->email}}<br/>
                  <strong >Address :&nbsp;</strong>{{$order->shipping->address}}<br/>
                  <strong>Payment :&nbsp;</strong>{{$order->payment->payment_method}}
                       @if($order->payment->payment_method == 'Bkash')
                         (Transaction no:{{$order->payment->transaction_no}})
                       @endif
                </td>
                <td style="padding-left: 5px;"><strong>Shipping Info</strong></td>
                 <td  style="text-align: left;padding-left: 5px;">
                  <strong >Name :&nbsp;</strong>{{$order->shipping->del_first_name}} {{$order->shipping->del_last_name}} <br/>
                  <strong >Mobile No :&nbsp;</strong>{{$order->shipping->del_mobile_no}}<br/>
                  <strong >Email :&nbsp;</strong>{{$order->shipping->del_email}}<br/>
                  <strong >Address :&nbsp;</strong>{{$order->shipping->del_address}}<br/>
                 
                </td>
               </tr>
               <tr>
                 <td colspan="4" style="padding-left: 5px; text-align: center">
                   <strong>Order Dtails</strong>
                 </td>
               </tr>
               <tr>
                 <td  style="padding-left: 5px;"><strong>Product Name & Image</strong></td>
                 <td colspan="2" style="padding-left: 5px;"><strong>Color & Size</strong></td>
                 <td style="padding-left: 5px;"><strong>Quantity & Price</strong></td>
               </tr>
               @foreach($order['OrderDetail'] as $details)

               <tr>
                <td  style="padding : 5px 0px 0px 5px;">
                  <img src="{{url($details->product->image)}}"
                            style="width:50px;height:55px;border:1px solid #000;"> &nbsp; {{$details->product->purchase->product_name}}
                </td>
                <td colspan="2" style="padding-left: 5px;">
                 {{$details->color->color_name ?? 'No Color'}}&nbsp; & &nbsp;
                 {{$details->size->size_name ?? 'No Size'}}
                </td>
                <td style="padding-left: 5px;">
                   @php
                      $sub_total = $details->quantity * $details->product->price;
                  @endphp
                  {{$details->quantity}} x {{$details->product->price}} = {{$sub_total}}

                </td>
               </tr>
               @endforeach
               <tr>
                <td colspan="3" style="text-align: right;padding-right: 5px;"><strong>Grand Total</strong></td>
                <td style="padding-left: 5px;">{{$order->order_total_amount}}</td>
               </tr>
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
@endsection