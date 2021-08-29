
@extends('site.layout.main')
@section('page')
<div class="row ">
    <div class='col-12'>
<div class="card">
<div class="card-header">
<h3>المنشورات</h3>
</div>

<div class="card-body">
<div class="my-post">
@foreach($posts as $post)

<div class="row ">
    <div class=' p-3 '>
<div class="card" style="width: 18rem;">
  <img src="{{$post->file}}" height="300px;" style='width:300px; '  class="card-img-top p-5" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->desc}}</p>
  
  </div>
</div>
</div>


@endforeach()


</div>
</div>
</div>
</div>

<span >
{{$posts->links()}}
</span>

<style>
.w-5{
    display:none;
}
    </style>

@stop