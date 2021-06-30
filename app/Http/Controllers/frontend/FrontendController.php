<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\Brand;
use App\Model\ProductSubImage;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\Slider;
use App\Model\ProductMeasurement;
use App\User;
use Auth;
use Illuminate\Support\Facades\Artisan;






class FrontendController extends Controller
{
	public function index(){
    // Artisan::call('config:cache');

    return view('frontend.layouts.home',[
         
         'products' => Product::orderBy('id','desc')->get(),
         'best_sell_products' => Product::where('best_status','1')->orderBy('id','desc')->get(),
         'offers' => Product::where('offers','1')->orderBy('id','desc')->get(),
         'categories' => Category::orderBy('id','desc')->get(),
         'featured_categories' => Category::Where('status' , '1')->orderBy('id','desc')->get(),
         'brands' => Brand::orderBy('id','desc')->get(),
         'slider_uppers' => Slider::where('upper' , '1')->orderBy('id','desc')->get(),
         'slider_lowers' => Slider::where('lower' , '3')->orderBy('id','desc')->get(),


    ]);

    }  

    public function newarrivalProductList(){
    	return view('frontend.single_page.newarrivals',[
                'products' => Product::where('new_arrival',1)->orderBy('id','desc')->paginate(5),
                'categories' => Category::orderBy('id','desc')->get(),
                'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                'brands' => Brand::orderBy('id','desc')->get(),
    	]);
    }

    public function productDetails($slug){

           $product = Product::where('slug',$slug)->first();
           $sub_image = ProductSubImage::where('product_id' , $product->id)->get();
           $product_size = ProductSize::where('product_id', $product->id)->get();
           $product_color = ProductColor::where('product_id',$product->id)->get();
           $all_products = Product::orderBy('id','desc')->get();
           $product_measurments = ProductMeasurement::where('product_id',$product->id)->get();
          
           return view('frontend.product-details',[
                'product' => $product,
                'sub_images' => $sub_image,
                'product_colors' =>  $product_color,
                'product_sizes' =>  $product_size,
                'categories' => Category::orderBy('id','desc')->get(),
                'brands' => Brand::orderBy('id','desc')->get(),
                'all_products' => $all_products,
                'product_measurments' => $product_measurments,
           ]); 
    }

    
    public function compare(Request $request)
    {

        $ids=$request->input('cpid');
        

   return  redirect()->route('compare.display')->with( ['ids' => $ids] );

 
    }
    public function display()
    {
        

        $categories = Category::latest()->where('status',1)->get();


        

       
        return view('frontend.compare',['categories' => Category::orderBy('id','desc')->get(),
        'brands' => Brand::orderBy('id','desc')->get(),]);


        
    }
}
