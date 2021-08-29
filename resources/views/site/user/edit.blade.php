@extends('site.layout.main')
@section('page')

<center>
<div class='justify-content-center '>
<div class='card col-6'>
<div class='card-header'>
تعديل البيانات
</div>
<div class='card-body'>
<form method='post' action="{{route('users.update', auth()->user()->id)}}" enctype='multipart/form-data'>
@csrf
@method('patch')
<div class='form=group'>
<label> الإسم</lable>
<input type='text' value="{{auth()->user()->name}}" class='form-control' name='name' >
</div>
<div class='form=group'>
<label>البريد الالكتروني</lable>
<input type='email' value="{{auth()->user()->email}}"  class='form-control' name='email' >
</div>
<div class='form=group'>
<label>رقم الجوال</lable>
<input type='text' value="{{auth()->user()->phone}}"  class='form-control' name='phone' >
</div>
<div class='form=group'>
<label>صورة شخصية</lable>
<input type='file' class='form-control' name='image' >
</div>
<div class='form=group'>
<label>كلمة السر</lable>
<input type='password' value="same" class='form-control' name='password'>
</div>

<a class='btn btn-warning'  href="{{route('index')}}">الرجوع</a>
<button type='submit' class='btn btn-success' >تعديل</button>
</form>
</div>
</div>
</div>
</center>
@stop