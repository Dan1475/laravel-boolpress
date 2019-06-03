@extends('layout.posts-layout')
@section('content')


  <div class="show">

    @foreach ($posts as $post)

      <div class="post-box">
        <div class="title-box">

        <h3> <a href="{{ route('post.show', $post->id)}}">{{$post->id}} - {{$post->title }}</a> </h3>
        <a href="{{route('post.edit', $post->id)}}"><i class="fas fa-marker"></i></a>
      </div>
      <div class="content-box">

       <p>{!!$post->content!!}</p>
       <div class="author-box">


       <small>Written By: <br>{{$post->author->username}}</small>
      </div>
        @foreach ($post->categories as $category)
          <small> <a href="{{route('category.show', $category->name)}}">{{$category->name}}</a> - </small>
         @endforeach

       </div>
      </div>
    @endforeach
  </div>


@stop
