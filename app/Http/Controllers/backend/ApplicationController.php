<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /*
        Route::get('setting','backend\ApplicationController@index')->name('application.setting');
        Route::post('setting','backend\ApplicationController@update');
     */
    public function index(){
        return view('backend.application-setting.index');
    }

    public function update(Request $request){
        $request->validate([
            'mobile' => 'required|string',
            'email' => 'required|email',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'google' => 'required|string',
            'rss' => 'required|string',
            'banner_image' => 'nullable|image',
        ]);

        update_static_option('mobile', $request->mobile);
        update_static_option('email', $request->email);
        update_static_option('facebook', $request->facebook);
        update_static_option('twitter', $request->twitter);
        update_static_option('linkedin', $request->linkedin);
        update_static_option('google', $request->google);
        update_static_option('rss', $request->rss);
        if($request->hasFile('banner_image')){
            update_static_option('banner_image', $request->file('banner_image')
            ->move('public/upload/banner_image/', str_random(40) . '.' . $request->banner_image->extension()));
 
      }
       
        return back()->with('success','Successfully updated');
    }
}
