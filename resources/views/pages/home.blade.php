@extends('layout.posts-layout')
@section('content')

  <form action="{{route('search')}}" method="get">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" value="">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" name="content" value="">
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="" name="category">
        <option value="">Choose Category</option>
        @foreach ($categories as $category)
          <option value="{{$category->id}}">
            {{$category->name}}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="author">Authors</label>
      <select class="" name="author">
        <option value="">Choose Author</option>
        @foreach ($authors as $author)
          <option value="{{$author->id}}">
            {{$author->username}}
          </option>
        @endforeach
      </select>
    </div>

    <input type="submit" name="" value="SEARCH">



  </form>

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
