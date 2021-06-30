@extends('frontend.layouts.master')

@section('css')
 <!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/demo2.min.css">

@endsection

@section('content')
<!-- End Header -->
<!-- End Header -->
	
    <!-- Start Breadcrumb -->
    <div id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="breadcrumbs">
                        <a href="#">Home</a> <span class="separator">&gt;</span> <span>Checkout</span>
                    </div>					   
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Banner -->
    <div id="banner-area" class="gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-inner blog-banner">
                        <a class="btn-lucian" href="#">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
			<!-- End PageHeader -->
			<div id="main-content-area" class="padtop80 padbot25 my2">
				<div class="container mt-4">
					<form action="{{route('customer.checkout.store')}}" method="POST" class="form">
						@csrf	
						
						<div class="row gutter-lg">
							<div class="col-lg-8 mb-6">
								<h3 class="title title-simple text-left">Billing Details</h3>
							
								<div class="row">
									<div class="col-xs-12">
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control" name="first_name" required="" />
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" name="last_name" required="" />
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>Email address</label>
										<input type="email" class="form-control" name="email"  />
									</div>
									<div class="col-xs-6">
										<label>Phone *</label>
										<input type="text" class="form-control" name="mobile_no" required="" />
									</div>
								</div>
								<label>Address *</label>
								<textarea class="form-control" name="address" placeholder="Please Give Us Your Address in Details" required=""></textarea>
						
								<label>Town / City </label>
								<input type="text" class="form-control" name="city" />
								<label>Country </label>
								<input type="text" class="form-control" name="country" />
									
								<!-- <div class="form-checkbox mt-8">
									<input type="checkbox" class="custom-checkbox" id="create-account"
										name="create-account">
									<label class="form-control-label" for="create-account">Create an account?</label>
								</div>
								<div class="form-checkbox mb-8">
									<input type="checkbox" class="custom-checkbox" id="different-address"
										name="different-address">
									<label class="form-control-label" for="different-address">Ship to a different
										address?</label>
								</div> -->
								<!-- <label>Order Notes (optional)</label>
								<textarea class="form-control" cols="30" rows="6"
									placeholder="Notes about your order, e.g. special notes for delivery"></textarea> -->
							
							</div>
							<aside class="col-lg-4 sticky-sidebar-wrapper mt-4">
								<div class="sticky-sidebar" data-sticky-options="{'bottom': 50}">
									<h3 class="title title-simple text-left">Your Order</h3>
									<div class="summary mb-4">
										<table class="order-table">
											@php
			                                   $contents = Cart::content();
			                                   $total = 0;
							                @endphp
											<thead>
												<tr>
													<th>Product</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												@foreach($contents as $content)
												<tr>
													<td class="product-name">{{$content->name}}</td>
													<td class="product-total">BDT. {{$content->price}}</td>
													@php
							                           $total += $content->subtotal;
							                        @endphp
												</tr>
												@endforeach
											
												<tr class="order-total">
													<td>Total:</td>
													<td>BDT. {{$total}}</td>
												</tr>
											</tbody>
										</table>
										
										<!-- <div class="payment accordion radio-type">
											<div class="card">
												<div class="card-header">
													<a href="#collapse1" class="collapse">Direct bank transfer</a>
												</div>
												<div id="collapse1" class="expanded">
													<div class="card-body">
														Make your payment directly into our bank account. Please use
														your Order ID as the payment reference. Your order will not be
														shipped until the funds have cleared in our account.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse2" class="expand">Check payments</a>
												</div>
												<div id="collapse2" class="collapsed">
													<div class="card-body">
														Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
														Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse3" class="expand">Cash on delivery</a>
												</div>
												<div id="collapse3" class="collapsed">
													<div class="card-body">
														Quisque volutpat mattis eros. Lorem ipsum dolor sit amet,
														consectetuer adipiscing elit. Donec odio. Quisque volutpat
														mattis eros.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse4" class="expand">PayPal</a>
												</div>
												<div id="collapse4" class="collapsed">
													<div class="card-body">
														Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
														non, semper suscipit, posuere a, pede. Donec nec justo eget
														felis facilisis fermentum.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse5" class="expand">Credit Card (Stripe)</a>
												</div>
												<div id="collapse5" class="collapsed">
													<div class="card-body">
														Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor
														sit amet, consectetuer adipiscing elit. Donec odio. Quisque
														volutpat mattis eros. Lorem ipsum dolor sit ame.
													</div>
												</div>
											</div>
										</div> -->
									</div>
									<button type="submit" class="btn btn-primary btn-order">Place Order</button>
								</div>
							</aside>
						</div>
					</form>
				</div>
			</div>
		</div>		
@endsection

@section('js')
    <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#detailsForm').validate({
    rules: {
      color_Id: {
        required: true,
      },
     size_id: {
        required: true,
   
      },
    },
    messages: {
      color_Id: {
        required: "Please select Color",
      },
      size_id: {
        required: "Please select Size",
      },
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
  
@endsection