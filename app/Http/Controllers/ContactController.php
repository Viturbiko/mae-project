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
    		'message' => 'required|min:10',
            'privacy' => 'required'
    	]);

    	Mail::send('contact-message', [
    		'name' => $request->name,
    		'email' => $request->email,
    		'msg' => $request->message
    	], function($mail) use ($request){
			$mail->from($request->email, $request->name);
            $mail->to('mae.project@puertos.es')->subject('Nuevo mensaje de MAE-Project');
    	});

    	return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
