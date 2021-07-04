<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductSubImage;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\Size;
use App\Model\Color;
use App\Model\Category;
use App\Model\Brand;

use Cart;


class CartController extends Controller
{
    public function shoppingCart(){

    }

    public function addToCart(Request $request){

        $this->validate($request,[
           'color' => 'required',
           'size' => 'required',
        ]);

        $product = Product::find($request->input('id'));
        if($request->input('size_id') && $request->input('color_id')){
            $product_size = Size::where('id',$request->input('size_id'))->first();
            $product_color = Color::where('id',$request->input('color_id'))->first();
            //  return ($product_size)->toArray();

            Cart::add([
                 'id' => $product->id,
                 'qty' => $request->input('quantity'),
                 'price' => $product->price - $product->discount,
                 'name' => $product->title,
                 'weight' => 550,
                 'options' => [
                       'size_id' => $request->input('size_id'),
                       'size_name' => $product_size->size_name,
                       'color_id' => $request->input('color_id'),
                       'color_name' => $product_color->color_name,
                       'image' => $product->image
                 ],
            ]);
        }else{
            Cart::add([

                'id' => $product->id,
                'qty' => $request->input('quantity'),
                'price' => $product->price - $product->discount,
                'name' => $product->title,
                'weight' => 550,
                'options' => [
                    // 'size_id' => $request->input('size_id'),
                    // 'size_name' => $product_size->size_name,
                    // 'color_id' => $request->input('color_id'),
                    // 'color_name' => $product_color->color_name,
                    'image' => $product->image
                ],


            ]);
        }

        return redirect()->route('view.cart')->with('success','Product added successfully');

    }

    public function showCart(){

        return view('frontend.cart',[

                'categories' => Category::orderBy('id','desc')->get(),
                'brands' => Brand::orderBy('id','desc')->get(),
        ]);
    }


    public function deleteCart($rowId){
      Cart::remove($rowId);
      return redirect()->route('view.cart')->with('success','Product Deleted Successfully');
  }

  public function updateCart(Request $request){
    $cart = Cart::content()->where('rowId',$request->rowId);
    if($cart->isNotEmpty()){
        $price=$request->price*$request->qty;
          Cart::update($request->rowId,$request->qty);
          
          
          
          return response()->json(['success'=>'Product Updated Successfully','price'=>$price,'qty'=>$request->qty]);

    }
    else{
        return response()->json(['error'=>'Product Not Updated Successfully','row'=>$request->rowId,'qty'=>$request->qty]);


    }
  }
}
