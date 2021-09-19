<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\FormSubmitted;

class AlertController extends Controller
{
    public function alert(Request $request){
        $text = $request->text;
       
        broadcast(new FormSubmitted($text));
return view('site.home.sender');
    }
}
