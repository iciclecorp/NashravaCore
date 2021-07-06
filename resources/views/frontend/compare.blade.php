<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
	<!-- bootstrap js -->
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">	


<style>

.product-short-desc,.product-tabs .tab-pane{
    content: "\a";
    white-space: pre-line;
    height:250px;
}
a{
    color:#F36523 !important;
}
    </style>

    <div class="container" style="margin-top: 80px">
       
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h3>Compare</h3>
                    </div>
                </div>
                <hr>
                <div class="row">

                <?php 

              $ids = session()->get( 'ids' );

              
                $idarr=explode(",",$ids);
                ?>
                @foreach($idarr as $id)
                <?php
                
                $products= DB::table('products')->where('id',$id)->get();
                    ?>
                    @foreach($products as $pro)
                    <?php
                
                $colors= DB::table('product_colors')->where('product_id',$pro->id)->get();
                $sizes= DB::table('product_sizes')->where('product_id',$pro->id)->get();

                    ?>
                        <div class="col-lg-4 rmv{{$pro->id}}">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{asset($pro->image)}}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                >
                                <div class="card-body" style="padding-top:20px;">
                                    <a href="{{route('product.details', $pro->id)}}"><h4 class="card-title">{{ $pro->title }}</h4></a>
                                    @php
                                     $price = $pro->price - $pro->discount;
                                   @endphp
                                    <span class="price">
                                    <span class="amount">BDT. {{ $price }}</span>@if($pro->discount) <span><del>{{$pro->price}}</del></span>@else <span><del>0.00</del></span>@endif
                                </span>
                                <table class="table table-bordered" style="margin-top:20px;">
  <thead>
      <tr>
          <td>
          <p class="p-short-des">
          Quantity:{{ $pro->qty }}
</p>
          </td>
</tr>
  <tr> 
    <td>
    <p class="p-short-des">
    Colors:
    <?php 
foreach($colors as $color){
    $colorname= DB::table('colors')->where('id',$color->color_id)->first();

?>
{{$colorname->color_name ?? ''}}

    <?php
}
    ?>
    <p>
    </td>
    
      
    </tr>
    <tr> 
    <td>
    <p class="p-short-des">
    Sizes:
    <?php 
foreach($sizes as $size){
    $sizename= DB::table('sizes')->where('id',$size->size_id)->first();


    ?>
    {{$sizename->size_name ?? ''}}
<?php }?>
    <p>
    </td>
    
      
    </tr>
    <tr> 
    <td>
    <p class="p-short-des">
    Details:{{ $pro->details }}
    <p>
    </td>
    
      
    </tr>
    <tr>
        <td>
        <span class="add-to-cart"><a href="{{route('product.details', $pro->slug)}}"><i class="fa fa-eye" aria-hidden="true"></i>View Details</a></span>

    <span class="add-to-cart" style="float:right;">  
     <a href="javascript:void(0)" data-id="{{$pro->id}}" class="delete-confirm" ><i class="fa fa-trash"></i>
     </a></span>


        </td>


</tr>

  </thead>
  <tbody>
             

               
  
    
    
  </tbody>
</table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endforeach

                </div>
            </div>
        </div>
                                                  </div>
<script>
	$(document).ready(function(){
        var fieldArray = [];
                    var $this = $(this);
                    var rmvids=JSON.parse(sessionStorage.getItem('rmvids'))
                    if(rmvids){
                        $.each(rmvids, function(index, value){
                            
                            $(".rmv"+value).hide(400);

                        });
   
                    }
		$(".delete-confirm").click(function (){
			var id = $(this).data("id");
            $(".rmv"+id).hide(200);
            fieldArray.push($(this).data("id"));
            sessionStorage.setItem('rmvids', JSON.stringify(fieldArray))



           

	

}) 

		});
</script>