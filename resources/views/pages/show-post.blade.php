@extends('layout.posts-layout')
@section('content')

  <h1>POSTS</h1>

  <div class="show">


    @foreach ($posts as $post)

      <div class="post-box">
        <h4> {{$post->title }}</h4>
        <p>{{$post->content}}</p>
        @foreach ($post->categories as $category)
          <small> {{$category->name}}</small><br>
         @endforeach</h5>

      </div>
    @endforeach
  </div>


@stop
