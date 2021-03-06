<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\Brand;
use Cart;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.single_page.contact_us',[
            'categories' => Category::orderBy('id','desc')->get(),
            'sub_categories' => SubCategory::orderBy('id','desc')->get(),
            'brands' => Brand::orderBy('id','desc')->get(),
    ]);
    }

    
    public function handleForm(Request $request)
    {

        $this->validate($request, ['name' => 'required', 'email' => 'required|email']);

        $data = ['name' => $request->get('name') , 'email' => $request->get('email') , 'messageBody' => $request->get('message_body') ];

        Mail::send('frontend.emails.email', $data, function ($message) use ($data)
        {
            $message->from($data['email'], $data['name']);
            $message->to('info@nashrava.co', 'Admin')
                ->subject('Contact Us Message');
        });

        return redirect()
            ->back()
            ->with('success', 'Thank you for your feedback');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
