@extends('layout.posts-layout')
@section('content')

{{-- @foreach ($category->posts as $post)
  <div class="post-box">
    <h4> <a href="{{ route('post.show', $post->id)}}">{{$post->title }}</a> </h4>
    <p>{{$post->content}}</p>
    @foreach ($post->categories as $category)
      <small> <a href="{{route('post.show', $category->name)}}">{{$category->name}}</a></small><br>
     @endforeach

  </div>
@endforeach --}}

<h1>{{$category->name}}</h1>

@foreach ($category->posts as $post)

<div class="box">
  <h4>{{$post->title}}</h4>
  <p>{{$post->content}}</p>
</div>

@endforeach
@stop
