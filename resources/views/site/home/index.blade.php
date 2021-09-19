@extends('site.layout.main')
@section('page')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('5c6e7cef358becd6e30c', {
      cluster: 'ap2',
      forceTLS:true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
  <style>
.w-5{
    display:none;
}
    </style>
</head>
<body>
  
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

</body>
</html>





@stop