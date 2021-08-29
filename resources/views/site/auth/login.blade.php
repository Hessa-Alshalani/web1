@extends('site.layout.main')
@section('page')
<center>
<div class='justify-content-center '>
<div class='card col-6'>
<div class='card-header'>
<h3>تسجيل الدخول</h3>
</div>
<div class='card-body'>
<i class="fas fa-user" style="font-size:60px"></i>
<br><br>
<form method='post' action="{{route('login')}}" enctype='multipart/form-data'>
@csrf

<div class='form=group'>

<input type='email' class='form-control col-6 text-center' name='email' placeholder='الايميل' >
</div>
<div class='form=group'>

<input type='password' class='form-control col-6 text-center' name='password' placeholder='كلمة المرور'>
</div>
<br>
<button type='submit' class='btn btn-success' >تسجيل الدخول</button>
<a href="{{ url('/auth/redirect') }}" class="btn btn-danger"><i class="fa fa-google"></i> Google</a>
</form>

</div>
</div>
</div>
</center>
@stop