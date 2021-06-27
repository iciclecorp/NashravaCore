<?php

namespace App\Http\Controllers;

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
class PageController extends Controller
{
    public function search(Request $request){

   	$this->validate($request,[
              'search'=>'required'
   	]);

   	      
			$data['categories'] = Category::orderBy('id','desc')->get();
			$data['sub_categories'] = SubCategory::orderBy('id','desc')->get();
			$data['brands'] = Brand::orderBy('id','desc')->get();

	     $search_text = $request->search;
	     $data['products'] = Product::
           where('title', 'LIKE', '%'.$search_text.'%')
          ->orwhere('price', 'LIKE', '%'.$search_text.'%')
          ->orwhere('details', 'LIKE', '%'.$search_text.'%')->get();

          // $data['opinions'] = Opinion::
          //  where('title', 'LIKE', '%'.$search_text.'%')
          // ->orwhere('name', 'LIKE', '%'.$search_text.'%')
          // ->orwhere('details', 'LIKE', '%'.$search_text.'%')->get();
         
       return view('frontend.single_page.search',$data);  
   }
}
