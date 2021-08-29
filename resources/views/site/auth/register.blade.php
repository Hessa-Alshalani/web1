@extends('site.layout.main')
@section('page')
<center>
<div class='justify-content-center '>
    
<div class='card col-6'>
<div class='card-header'>
<h3>تسجيل جديد</h3>
</div>
<div class='card-body'>
<i class="fas fa-user" style="font-size:60px"></i>
<br><br>
<form method='post' action="{{route('register')}}" enctype='multipart/form-data'>
@csrf
<div class='form=group'>

<input type='text' class='form-control col-6 text-center ' name='name'placeholder='اسم المستخدم' >
</div>
<div class='form=group'>

<input type='email' class='form-control col-6 text-center' name='email' placeholder='الايميل' >
</div>
<div class='form=group'>

<input type='text' class='form-control col-6 text-center' name='phone' placeholder='رقم الجوال' >
</div>
<div class='form=group'>
<input type='file' class='form-control col-6 text-center' name='image'  >
</div>
<div class='form=group'>

<input type='password' class='form-control col-6 text-center' name='password' placeholder='كلمة المرور'>
</div>
<br>
<button type='submit' class='btn btn-success' style='width:200px; font-size:18px' >التسجيل</button>

</form>
</div>
</div>
</div>
</center>
@stop