@extends('layout.posts-layout')
@section('content')




<h1>{{$post->title}}</h1>

<div class="show-box">
  <p>{{$post->content}}</p>
  @foreach ($post->categories as $category)
    <small> {{$category->name}} -</small>
   @endforeach
</div>
@stop
