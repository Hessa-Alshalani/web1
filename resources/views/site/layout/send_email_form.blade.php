@extends('site.layout.main')
@section('page')
@if(Session::has('status'))
{{Session::get('status')}}
@endif
<div class='container'>

<div class='row justify-content-center'>
<div class='col md-12'>
<div class='card'>
<form action="{{route('send_emails')}}" method="post" >
@csrf 
<div class="form-group">
<label for="title">العنوان</label>
<input type='text' name='title' value="{{old('title')}}" class='form-control'>
@error('title') <span class="text-danger">{{$message}}</span> @enderror

<label for="body"> المحتوى </label>
<textarea  name='body'  class='form-control'>
    {{old('body')}}

</textarea>
@error('body') <span class="text-danger">{{$message}}</span> @enderror

</div>
<div class="form-group">
<button type="submit" name='submit' class='btn btn-primary'>ارسال الايميل</button>
</div>
</form>
</div>
</div>
</div>
</div>

@stop