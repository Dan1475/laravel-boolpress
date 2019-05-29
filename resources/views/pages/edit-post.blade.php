@extends('layout.posts-layout')
@section('content')


<div class="edit">
  <form action="{{ route('post.update', $post->id)}}" method="post">

    @csrf
    @method('PATCH')

    <div class="flex-box">

      <div class="left-form">



    <div class="form-style">
      <label for="title">TItle</label>
      <input type="text" name="title" value="{{$post->title}}">
    </div>
    <div class="form-style">
      <label for="content">Content</label>

      <textarea class="text-area" type="text" name="content" value="{!!$post->content!!}">{!!$post->content!!}</textarea>
    </div>
    <button type="submit" name="button">Edit Post</button>

  </div>


    <div class="check-style">

       <label for="category">Categories</label><br>
     @foreach ($categories as $category)
       <input type="checkbox" name="categories[]" value="{{ $category->id}}"

      @if ($category-> id == $post -> category_id)
        selected
    @endif

         >{{$category->name}}</input><br>
     @endforeach

   </div>

    </div>

  </form>
</div>


@stop
