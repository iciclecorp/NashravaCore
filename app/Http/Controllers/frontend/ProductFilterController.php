<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\Brand;
use App\Model\ShippingCost;
use Illuminate\Support\Facades\Artisan;
class ProductFilterController extends Controller
{  
    
     public function getShippingCost(Request $request){
        
                $cost_value = $request->shipping_area;
                $costs_value = ShippingCost::where('shipping_area' ,  $cost_value)->first();
               return response()->json($costs_value);
    }
    public function catProductList($id){
         
         // return ($cat_product)->toArray();
         return view('frontend.single_page.category-product-list',[
               
            'cat_products' => Product::where('category_id',$id)->orderBy('id','desc')->get(),
            'categories' => Category::orderBy('id','desc')->get(),
            'cat_name' => Category::orderBy('id','desc')->where('id',$id)->first(),

            'sub_categories' => SubCategory::orderBy('id','desc')->get(),
            'brands' => Brand::orderBy('id','desc')->get(),
         ]);
    }

    public function subCatProductList($id){
         
         // return ($cat_product)->toArray();
         return view('frontend.single_page.sub-category-product-list',[
               
            'sub_cat_products' => Product::where('sub_category_id',$id)->orderBy('id','desc')->get(),
            'sub_categories' => SubCategory::orderBy('id','desc')->get(),
            'cat_name' => SubCategory::orderBy('id','desc')->where('id',$id)->first(),

            'categories' => Category::orderBy('id','desc')->get(),
            'brands' => Brand::orderBy('id','desc')->get(),
         ]);
    }
  
    public function brandProductList($id){
    	    return view('frontend.single_page.brand_product_list',[
    	    'brand_products' => Product::where('brand_id',$id)->orderBy('id','desc')->get(),
            'categories' => Category::orderBy('id','desc')->get(),
            'cat_name' => Brand::orderBy('id','desc')->where('id',$id)->first(),

            'sub_categories' => SubCategory::orderBy('id','desc')->get(),
            'brands' => Brand::orderBy('id','desc')->get(),
        ]);  
    }

     public function  priceProductList (Request $request){
        
        // return $request->price_range;    
            if($request->price_range == '1'){
                $products = Product::whereBetween('price' , [ 0 , 1000])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
            }

            if($request->price_range == '2'){
                $products = Product::whereBetween('price' , [1000, 2000])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
             }

            if ($request->price_range == '3'){
                $products = Product::whereBetween('price' , [2000 , 3000])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
             }

            if ($request->price_range == '4'){
                $products = Product::whereBetween('price' , [ 3000 , 4000])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
             }

            if ($request->price_range == '5'){
                $products = Product::whereBetween('price' , [ 4000 , 5000 ])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
             }

            if ($request->price_range == '6'){
                $products = Product::whereBetween('price' , [ 5000 , 50000 ])->get();
                return view('frontend.single_page.price-wise-product-list',[
                        'products' => $products,
                        'categories' => Category::orderBy('id','desc')->get(),
                        'sub_categories' => SubCategory::orderBy('id','desc')->get(),
                        'brands' => Brand::orderBy('id','desc')->get(), 
                ]);
             }  

       
        
    }
}
