<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use App\Model\Color;
use App\User;
use Auth;

class ColorController extends Controller
{
    public function index()
    {
        return view('backend.color.index',[
            'colors' => Color::orderBy('id','desc')->get()
        ]);
    }

    
    public function create()
    {
        return view('backend.color.create');
    }

    
    public function store(ColorRequest $request)
    {
       $color = new Color();
       $color->fill($request->all());
       $color->created_by = Auth::user()->id;
       if($color->save()){
          return redirect()->route('color.create')->with('success','Color Created Successfully');
       }else{
          return redirect()->back()->with('error','Sorry! Color Does not Created Successfully');
       }
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('backend.color.edit',[
          'color' => $color
        ]);
    }

    public function update(Request $request, $id)
    {      
          $this->validate($request, [
            'color_name' => [
                'required',
                Rule::unique('colors')->ignore($id , 'id'),
            ],
          ]);

           $color = Color::findOrFail($id);
           $color->fill($request->all());
           $color->updated_by = Auth::user()->id;
           if($color->save()){
              return redirect()->route('color.index')->with('success','Color Updated Successfully');
           }else{
              return redirect()->back()->with('error','Sorry! Color Does not Updated Successfully');
           }
    }

   
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        if($color->delete()){
            return redirect()->route('color.index')->with('success','Color Deleted Successfully');
        }else{
            return redirect()->back()->with('error','Color Does not Deleted Successfully');
        }
    }
}
