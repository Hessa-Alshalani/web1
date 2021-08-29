<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function register(Request $requset){
        $requset->validate([
            'name'=>'required',
            'phone'=>'nullable',
            'email'=>'required',
            'password'=>'required',
            'image'=>'nullable',

        ],$this-> validationMsg,[
            'name'=>'اسم المستخدم',
            'email'=>'ايميل',
            'password'=>'كلمة المرور',
        ]);
        $inputs = $requset->except('_token');
        $inputs['password'] = Hash::make($inputs['password']);
        if($requset->hasFile('image')){
            $inputs['image']= Storage::disk('public')->put('files',$requset->file('image'));

        }
        User::query()->create($inputs);
       if(Auth::attempt($requset->only('email','password')))
       {
           return redirect()->route('index');
       }

       
        }
        public function login(Request $requset){
            $requset->validate([
                
                'email'=>'required',
                'password'=>'required',
                
    
            ],$this-> validationMsg,[
                'email'=>'ايميل',
                'password'=>'كلمة المرور',
            ]);
           
            if(Auth::attempt($requset->only('email','password')))
            {
                return redirect()->route('index');
            }
            else{
                return redirect()->back();
            
            }   
        }
        public function logout(){
\auth()->logout();
return redirect()->route('index');
        }
        public function edit(User $user){
            return view('site.user.edit');
        }

        public function update(Request $requset,User $user ){
           
            $input = $requset->except('_token','_method');
            if($requset->get('password') != 'same'){
                $input['password']= Hash::make($input['password']);
            }
            if($requset->hasFile('image')){
                $input['image']= Storage::disk('public')->put('files',$requset->file('image'));
            }  
            $user->update($input);
            return redirect()->route('index');
        }
}


