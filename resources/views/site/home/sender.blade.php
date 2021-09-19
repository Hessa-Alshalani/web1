@extends('site.layout.main')
@section('page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Script src="{{asset('js/app.js')}}"></Script>
</head>
<body>
<center>
<div class='justify-content-center '>
<div class='card col-6'>
<div class='card-header'>
<h3>انشاء تنبية</h3>
</div>
<div class='card-body'>
<br><br>
<form method='post' action="/web1/public/sender" enctype='multipart/form-data'>
@csrf

<div class='form=group'>

<input type='text' class='form-control col-6 text-center' name='text' placeholder='التنبيه' >
</div>

<br>
<button type='submit' class='btn btn-success' >نشر</button>
</form>

</div>
</div>
</div>
</center>
</body>
</html>

@stop