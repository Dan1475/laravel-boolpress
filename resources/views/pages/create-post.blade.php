@extends('layout.posts-layout')
@section('content')


  <div class="edit">
    <form class="create" action="{{route('post.store')}}" method="post">
      @csrf
      <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" value="">
      </div>


      <div>
        <label for="content">Content</label><br>
        <textarea name="content" cols="40" rows="5"></textarea>

      </div>

      <button type="submit" name="button">SAVE NEW POST</button>
    </form>

  </div>

@stop
