<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <title>appsystem</title>
</head>
<body > 
   

    @if(session()->has('success'))

<div class="alert w-60 alert-success">
<h4 class="con-12 text-center">{{session()->get('success')}}</h4> 
</div>
@endif
</div>
@yield('header')

@auth 

<nav class="navbar navbar-expand-lg navbar-light bg-light " style="direction:rtl; ">
  <div class="container-fluid" style='background-color:#A4C9EB; height:100px'>
    <a class="navbar-brand" href="#"><img src='public/files/logo.png' style='width:200px' ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('profile')}}" style='font-size:20px ; margin-left:10px;  margin-right:350px'> اضافة منشور</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('index')}}" style='font-size:20px ; margin-left:10px; '>المنشورات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('users.edit', auth()->user())}}" style='font-size:20px ; margin-left:10px; '>تعديل البيانات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('logout')}}" style='font-size:20px ; margin-left:10px;' >تسجيل خروج</a>
        </li>
        </ul>
     </div>
  </div>
</nav>

</div>

@else
<nav class="navbar navbar-expand-lg navbar-light bg-light " style="direction:rtl; ">
  <div class="container-fluid" style='background-color:#A4C9EB; height:100px'>
    <a class="navbar-brand" href="#"><img src='public/files/logo.png' style='width:200px' ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('register-form')}}"  style='font-size:20px ; margin-left:10px;  margin-right:350px'>تسجيل جديد</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('login-form')}}" style='font-size:20px ; margin-left:10px;'>تسجيل دخول</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('index')}}" style='font-size:20px ; margin-left:10px;'>المنشورات</a>
        </li>
        </ul>
     </div>
  </div>
</nav>
@endauth


@auth 


  <center>
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light " style="direction:rtl; ">
  <div class="container-fluid" style='background-color:#fffff; height:100px'>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
   
      @if((auth()->user()->image))
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="" style='margin-right:550px;' > <img height="80px" width="80px" style="border-radius:50%" src="{{asset(auth()->user()->image)}}" ></a>
        </li>
        @else

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="" style='margin-right:550px;'> <img width="80px" style="border-radius:50%" src="public/files/userr.png" ></a>
        </li>
        @endif
       
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="" style='font-size:20px ; margin-top:40px'><h4> مرحبا .. {{auth()->user()->name}} </h4></a>
        </li>
        @endauth
        </ul>
     </div>
  </div>
</nav>
    <center>
    <div class="content">
<div class=" pt-5">
<div class='row'>
<div class="col-12 p-0 text-rigth" dir="rtl">
    <div class="row">
        @if($errors->any())
<div class="alert w-60 alert-danger">
    <ul>
@foreach($errors->all() as $err)
<li>
    {{$err}}
</li>
@endforeach
</ul>

</div>
@endif
@if(session()->has('success'))

<div class="alert w-60 alert-success">
<h4 class="con-12 text-center">{{session()->get('success')}}</h4> 
</div>
@endif
</div>
@yield('page')
</div>
</div>
   
</div>
</div>
</center>
@yield('js')
   <script src="{{asset('js/app.js' )}}" >
</body>
</html>