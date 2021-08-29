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
 Route::view('/home','site.home.index')->name('home');
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
 //Route::get('/auth/callback',[App\Http\Controllers\SocialController::class,'callback']);
 Route::get('/bublic/auth/callback',[App\Http\Controllers\SocialController::class,'callback']);
 


