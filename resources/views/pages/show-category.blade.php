@extends('layout.posts-layout')
@section('content')

<div class="category">

 <h1>Categories</h1>
@foreach ($categories as $category)

  <p> <a href="{{route('category.show', $category->name)}}">{{$category->id}} - {{$category->name}}</a> </p>
@endforeach
</div>
@stop
