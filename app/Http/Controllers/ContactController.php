<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'message' => 'required|min:10'
    	]);

    	Mail::send('contact-message', [
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'msg' => $request->message
    	], function($mail) use ($request){
			$mail->from($request->email, $request->name);
			$mail->to('imawings@gmail.com')->subject('Nuevo mensaje de MAE-Project');
    	});

    	return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
