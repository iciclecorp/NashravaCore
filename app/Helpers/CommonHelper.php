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

    function remove_from_coupon_session($product_id){
        if (!Session::get('coupon')){
            Session::put('coupon', []);
        }
        $old_coupon_session_items = Session::get('coupon');
        Session::put('coupon', []);
        $execute = false;
        try {
            foreach ($old_coupon_session_items as $old_coupon_session_item){
                if ($old_coupon_session_item[$product_id] == $product_id && $execute == false){
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
}
