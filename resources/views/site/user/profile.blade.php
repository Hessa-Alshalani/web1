@extends('site.layout.main')
@section('page')
<center>
<div class='justify-content-center '>
<div class='card col-6'>
<div class='card-header'>
الصفحة الشخصية
</div>
<div class='card-body'>
<div class="form create">
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
@csrf 
<input type="hidden" name="user_id" value="{{auth()->id()}}">
<div class="row">
<div class="col-12">
<div class="form-group">
<label>العنوان</label>
<input type="text" name="title" class="form-control" >
</div>
</div>
<div class="col-12">
<div class="form-group">
<label> الوصف</label>
<textarea name="desc" class="form-control" rows="5" ></textarea>

</div>
</div>
<div class="col-12">
<div class="form-group">
<label>الصورة</label>
<input type="file" name="file" class="form-control" >
</div>
</div>
</div>
<button type="submit" class="btn btn-success" style="width:100px">نشر</button>
</form>
</div>

</div>
</div>
<hr>
<div class='my-post'>
<h4>منشوراتي</h4>
@foreach(auth()->user()->posts as $post)
<div class="row ">
   <div class ='p-3'>
<div class="card " style="width: 18rem;">
  <img src="{{$post->file}}" height="300px" style='width:300px; '  class="card-img-top p-5" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->desc}}</p>
  
  </div>
</div>
</div>

@endforeach()
</div>

</center>
@stop