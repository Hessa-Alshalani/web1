@extends('site.layout.main')
@section('page')
@if(Session::has('message_sent'))
{{Session::get('message_sent')}}
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class='container'>

<div class='row justify-content-center'>
<div class='col md-12'>
<div class='card'>

<form action="{{route('contact-us')}}" method="post" >
@csrf
<div class="form-group">
<label for="title">الاسم</label>
<input type="text" name='name' class='form-control' > 
<label for="title">الايميل</label>
<input type="email" name='email'class='form-control'  > 
<label for="title">رقم الهاتف</label>
<input type="text" name='phone' class='form-control'> 
<textarea name='message' class='form-control' >الرسالة</textarea>
<br>
<button type='submit' class='btn btn-primary' style='width:200px'>ارسال </button>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>
@stop