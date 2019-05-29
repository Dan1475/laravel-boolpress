@extends('layout.posts-layout')
@section('content')

<div class="show-box">
  <div class="title">

    <h1>{{$post->title}}</h1>

  </div>

<div class="content-box">
  <p>{{$post->content}}</p>
  <div class="category-box">

  @foreach ($post->categories as $category)
    <small> <a href="{{route('category.show', $category->name)}}">{{$category->name}}</a> - </small>
   @endforeach
  </div>
 </div>
</div>
@stop
