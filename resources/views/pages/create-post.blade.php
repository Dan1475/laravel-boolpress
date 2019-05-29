@extends('layout.posts-layout')
@section('content')


  <div class="edit">

    <form class="create" action="{{route('post.store')}}" method="post">
      @csrf
    <div class="flex-box">
     <div class="left-form">

        <div class="form-style">
          <label for="title">Title</label><br>
          <input type="text" name="title" value="">
        </div>


        <div  class="form-style">
          <label for="content">Content</label><br>
          <textarea name="content" cols="40" rows="5"></textarea>

        </div>

        <button type="submit" name="button">SAVE NEW POST</button>


      </div>

      <div  class="check-style">
           <label for="category">Categories</label><br>

           @foreach ($categories as $category)

             <input type="checkbox" name="categories[]" value="{{$category->id}}"><label>{{$category->name}}  </label><br>
           @endforeach
         </div>
       </div>


    </form>

  </div>

@stop
