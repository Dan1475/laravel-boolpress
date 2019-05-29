@extends('layout.posts-layout')
@section('content')


<div class="category-post-box">

<h1>{{$category->name}}</h1>
 <div class="post-box">

@foreach ($category->posts as $post)

<div class="box">
  <h2>{{$post->id}} - {{$post->title}}</h2>
  <p>{{$post->content}}</p>
  @foreach ($post->categories as $category)

  <small> <a href="{{route('category.show', $category->name)}}">{{$category->name}}</a> - </small>
@endforeach

</div>

@endforeach
</div>
</div>
@stop
