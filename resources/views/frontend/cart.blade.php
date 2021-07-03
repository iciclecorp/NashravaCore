@extends('frontend.layouts.master')
@section('content')
    <!-- Start Breadcrumb -->
    <div id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a href="{{url('/')}}">Home</a> <span class="separator">&gt;</span> <span> Cart</span>
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
                        <a class="btn-lucian" href="#">Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Main Content -->
    <div id="main-content-area" class="padtop80 padbot75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="cart-table table-condensed ">
                            <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product Name</th>
                                <th class="product-name">Size & Color</th>
                                <th class="product-subtotal">Price</th>
                                <th class="product-quantity">Quantity</th>

                                <th class="product-grandtotal">SubTotal</th>
                                <th class="product-grandtotal">Coupon</th>

                            </tr>
                            </thead>
                            @php
                                $count=0;
                                $subtotal = 0;
                                $subtotals = 0;
                            @endphp
                            @if(Cart::count() > 0)
                                <tbody>
                                @foreach(Cart::content() as $cart)
                                    @php
                                        $count++;
                                        $subtotal += $cart->price * $cart->qty;
                                    @endphp
                                    <tr class="cg">
                                        <td class="product-remove"><a href="{{ route('del.cart', $cart->rowId) }}"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img alt="" src="{{ asset($cart->options->image) }}"
                                                             width="100px" height="100px">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $cart->name }}</a>
                                        </td>
                                        <td class="product-edit"><span>Size: {{$cart->options->size_name}}</span><br/>
                                            <span>Color: {{$cart->options->color_name}}</span>
                                        </td>
                                        <td class="product-subtotal">BDT. {{$cart->price }}</td>


                                        <input type="hidden" name="id" id="id" value="{{$cart->id}}">

                                        <input type="hidden" name="price" id="price" value="{{$cart->price}}">
                                        <td class="product-quantity">

                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box qty" type="text" id="qty"
                                                       name="qtybutton" value="{{$cart->qty}}"
                                                       onchange="myCart(this.form)">
                                            </div>


                                        </td>
                                        <td class="product-subtotal">BDT.<span
                                                class="oldsubtotal{{ $cart->rowId}}"> {{$subtotal }}</span><span
                                                class="subtotal{{ $cart->rowId}}"></span></td>


                                        <td class="product-grandtotal">
                                                <input type="hidden" name="product_id" class="product_id" value="{{$cart->id}}">
                                                <input type="text" name="coupon" class="coupon_code" placeholder="Coupon code">
                                                <h5 class="coupon_alert_message"></h5>

                                        </td>
                                    </tr>
                                    @php
                                        $subtotals += $subtotal;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td colspan="6" style="text-align: right;">Grand Sub Total</td>
                                    <td class="product-grandtotal"><strong>BDT. {{ $subtotals}}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: right;">With Discount</td>
                                    <td><strong>BDT. {{ $subtotals}}</strong></td>
                                </tr>
                                </tbody>
                            @else
                                <tbody>
                                <tr>
                                    <td colspan="4">No Item added yet</td>
                                </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="update-cart-area">
                        <a href="{{route('product.list')}}" class="lucian-border-btn">CONTINUE SHOPPING</a>
                        <input type="submit" class="lucian-border-btn" value="UPDATE SHOPPING CART">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Place Section -->
                    <!--  <div class="place-section">
                         <div class="place-head">
                             <h2>ESTIMATE SHIPPING AND TAX</h2>
                             <p>Enter your destination to get shipping & tax</p>
                         </div>
                         <div class="lucian-select-options">
                             <h5>Country <em class="county-star">*</em></h5>
                             <div class="lucian-options">
                                 <form class="form-horizontal" method="post">
                                     <select class="option-list" name="language">
                                         <option value="11">United States </option>
                                         <option value="12">Afganisthan</option>
                                         <option value="21">Albenia</option>
                                     </select>
                                 </form>
                             </div>
                         </div>
                         <div class="lucian-select-options options-state half-field tax-options">
                             <h5>State/Province <em class="county-star">*</em></h5>
                             <div class="lucian-options">
                                 <form class="form-horizontal" method="post">
                                     <select class="option-list" name="language">
                                         <option value="select">--Select Options--</option>
                                         <option value="11">United States </option>
                                         <option value="12">Afganisthan</option>
                                         <option value="21">Albenia</option>
                                         <option value="25">Algeria</option>
                                         <option value="25">Australia</option>
                                     </select>
                                 </form>
                             </div>
                         </div>
                         <div class="lucian-select-options half-field-last tax-options">
                             <h5>Zip/Postal Code</h5>
                             <div class="lucian-options">
                                 <form class="form-horizontal" method="post">
                                     <select class="option-list" name="language">
                                         <option value="options">--Select Options--</option>
                                         <option value="11">1234</option>
                                         <option value="12">1234</option>
                                         <option value="21">1234</option>
                                         <option value="25">1234</option>
                                         <option value="25">1234</option>
                                     </select>
                                 </form>
                             </div>
                         </div>
                         <button type="submit" class="lucian-gray-btn">get a Quote</button>
                     </div> -->
                    <!-- End Place Section -->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Place Section -->
                    <div class="place-section">
                        <div class="place-head">
                            <h2>ESTIMATE SHIPPING AND TAX</h2>
                            <p>Checkout with multiples address</p>
                        </div>
                        <!-- Start Table -->
                        <table>
                            <tbody>
                            <tr>
                                <td class="subtotal">Subtotal</td>
                                <td>BDT. {{ $subtotals}}</td>
                            </tr>
                            <!--  <tr>
                                 <td class="shipping">Shiping</td>
                                 <td>Free</td>
                             </tr> -->
                            <tr>
                                <td class="grandtotal">Grandtotal</td>
                                <td>BDT. {{ $subtotals}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table -->
                        @if(@Auth::user()->id != NULL && Session::get('shipping_id') == NULL)
                            <a href="{{route('customer.checkout')}}" class="lucian-gray-btn">Proceed to checkout</a>
                        @elseif(@Auth::user()->id != NULL && Session::get('shipping_id') != NULL)
                            <a href="{{route('customer.payment')}}" class="lucian-gray-btn">Proceed to checkout</a>
                        @else
                            <a href="{{route('customer.login')}}" class="lucian-gray-btn">Proceed to checkout</a>
                        @endif
                    </div>
                    <!-- End Place Section -->
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {

            $('.qtybutton').on('click', function () {
                var rowCount = $('.cg').length;
                var id = $("#id").val();
                var qty = $("#qty" + id).val();


                var price = $("#price" + id).val();
                alert(rowCount);

                alert(price);
                var total = qty * price;

                $('.subtotal' + id).text(total);
                $('.oldsubtotal' + id).hide();
            });
        });

        var selected_coupon_field = null;
        $(".coupon_code").click(function() {
            selected_coupon_field = $(this);
        });

        $('.coupon_code').autocomplete({
            source: function(request, response) {
                console.log(request.term);
                var formData = new FormData();
                formData.append('coupon_code', request.term)
                formData.append('product_id', selected_coupon_field.parent().find('.product_id').val())
                $.ajax({
                    method: 'POST',
                    url: "{{route('coupon.check')}}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data){
                        console.log(data)
                        if(data.error){
                            selected_coupon_field.parent().find('.coupon_alert_message').text(data.error);
                            selected_coupon_field.parent().find('.coupon_alert_message').css('color', 'red');
                        }else if(data.success){
                            selected_coupon_field.parent().find('.coupon_alert_message').text(data.success);
                            selected_coupon_field.parent().find('.coupon_alert_message').css('color', 'green');
                            selected_coupon_field.parent().find('.coupon_code').attr('readonly', true);
                        }
                    },
                })
            },
            minLength: 1
        });
    </script>
@endsection
