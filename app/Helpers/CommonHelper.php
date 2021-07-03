<?php

use App\Model\Coupon;
use App\Model\OrderDetail;
use App\StaticOption;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

if (!function_exists('random_code')){

    function set_static_option($key, $value)
    {
        if (!StaticOption::where('option_name', $key)->first()) {
            StaticOption::create([
                'option_name' => $key,
                'option_value' => $value
            ]);
            return true;
        }
        return false;
    }

    function get_static_option($key)
    {
        if (StaticOption::where('option_name', $key)->first()) {
            $return_val = StaticOption::where('option_name', $key)->first();
            return $return_val->option_value;
        }
        return null;
    }

    function update_static_option($key, $value)
    {
        if (!StaticOption::where('option_name', $key)->first()) {
            StaticOption::create([
                'option_name' => $key,
                'option_value' => $value
            ]);
            return true;
        } else {
            StaticOption::where('option_name', $key)->update([
                'option_name' => $key,
                'option_value' => $value
            ]);
            return true;
        }
        return false;
    }

    //Use for front and session data
    function remove_from_coupon_session($product_id){
        if (!Session::get('coupon')){
            Session::put('coupon', []);
        }
        $old_coupon_session_items = Session::get('coupon');
        Session::put('coupon', []);
        $execute = false;
        try {
            foreach ($old_coupon_session_items as $old_coupon_session_item){
                if ($old_coupon_session_item['product_id'] == $product_id && $execute == false){
                    $execute = true;
                    continue;
                }
                $request = new \Illuminate\Http\Request;
                $request->session()->push('coupon', $old_coupon_session_item);
            }
            return response()->json( ['error' => 'Invalid Coupon']);
        }catch (\Exception $exception){
            return response()->json( ['error' => $exception->getMessage()]);
        }
    }
    //Use for front and session data
    function get_discount_price_by_product_id($product_id){
        $product = \App\Model\Product::find($product_id);
        foreach (Session::get('coupon') as $coupon){
            if ($coupon['product_id'] == $product_id){
                $coupon = Coupon::find($coupon['coupon_id']);
                if($coupon->amount_type == 'Percentage'){
                    return $product->price - ($product->price * ($coupon->amount/100));
                }else{
                    return $product->price - $coupon->amount;
                }
            }
        }

        return $product->price;
    }

    //Global discount check for backend site
    function discount_price($user_id, $product_id, $coupon_id){
        $coupon = Coupon::find($coupon_id);
        $product = \App\Model\Product::find($product_id);
        if (in_array(\App\User::find($user_id)->email, explode(",",$coupon->users)) && in_array($product_id, explode(",",$coupon->products))){
            if($coupon->amount_type == 'Percentage'){
                return $product->price - ($product->price * ($coupon->amount/100));
            }else{
                return $product->price - $coupon->amount;
            }
        }else{
            $product->price;
        }
    }
}
