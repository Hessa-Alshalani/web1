<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controleers\SocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
 
 Route::view('/register','site.auth.register')->name('register-form');
 Route::view('/login','site.auth.login')->name('login-form');

 Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');
 Route::post('/login',[App\Http\Controllers\UserController::class,'login'])->name('login');
 Route::get('/logout',[App\Http\Controllers\UserController::class,'logout'])->name('logout');
 Route::get('/index',[App\Http\Controllers\PostController::class,'show'])->name('index');
 Route::resource('posts',\App\Http\Controllers\PostController::class);
 Route::resource('users',\App\Http\Controllers\UserController::class);
 Route::view('/profile','site.user.profile')->name('profile');
 Route::get('/auth/redirect',[App\Http\Controllers\SocialController::class,'redirect']);
 Route::get('/bublic/auth/callback',[App\Http\Controllers\SocialController::class,'callback']);

 Route::get('/send_emails', [App\Http\Controllers\SendMailController::class,'form'])->name('send_emails_form');
 Route::post('/send_emails', [App\Http\Controllers\SendMailController::class,'send_emails'])->name('send_emails');


Route::get('/sender', function(){
    return view('site.home.sender');
});

Route::post('/sender',[App\Http\Controllers\AlertController::class, 'alert']);

Route::get('/contact-us',[App\Http\Controllers\ContactController::class,'contact']);
Route::post('/contact',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact-us');

