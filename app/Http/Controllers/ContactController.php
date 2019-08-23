<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail; //call model
use Mail;
use DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('emails.formview'); 
    }

    public function store(Request $request)
    {   
        $this->validate($request, [
            'email'=>'required',
            'message'=>'required',
            ]);
            
        $data = ['message'=>$request->input('message')];
        Mail::to($request->input('email'))->send(new TestEmail($data));
        
        //return view('emails.formview'); 
        return redirect('/sendemail')->with('success', 'Email Successfully Sent!!!'); 
    }


}
