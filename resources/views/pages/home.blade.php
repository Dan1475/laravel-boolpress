@extends('layout.posts-layout')
@section('content')

  <h1>POSTS</h1>

  <div class="show">


    @foreach ($posts as $post)

      <div class="post-box">
        <h4> <a href="{{ route('post.show', $post->id)}}">{{$post->title }}</a> </h4>
        <p>{{$post->content}}</p>
        @foreach ($post->categories as $category)
          <small> <a href="{{route('category.show', $category->name)}}">{{$category->name}}</a></small><br>
         @endforeach

      </div>
    @endforeach
  </div>


@stop
