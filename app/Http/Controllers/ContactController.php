<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){
return view('site.home.contact-us');
    }

    public function sendEmail(Request $Request){
        $datalis = [
            'name'=>$Request->name,
            'email'=>$Request->email,
            'phone'=>$Request->phone,
            'message'=>$Request->message,
        ];
        Mail::to('hessaj31@gmail.com')->send(new ContactMail($datalis));
        return back()->with('message_sent','تم الارسال بنجاح');
    }
}
