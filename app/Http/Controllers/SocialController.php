<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use Auth;
use App\Models\User;

class SocialController extends Controller
{

public function redirect()
{
    return Socialite::driver('google')
   -> with(
       [ 'client_id'     =>'610886632820-9mtfesn5kprqnm7l6aor5pljlep97mjg.apps.googleusercontent.com'],
       [ 'client_secret' => 'PTGk_1CO96eSY1w2EcyuC0Ij'],
       [ 'redirect'      => 'http://localhost/web1/bublic/auth/callback']
   )
  
      ->redirect();
}

public function callback()
{
    try {
            $user = Socialite::driver('google')->user();
            
            $userDetails = User::where('google_id', $user->id)->first();
            if($userDetails){
                    Auth::login($userDetails);
                return redirect('/index');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect('/index');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }
}