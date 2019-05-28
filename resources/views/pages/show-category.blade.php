@extends('layout.posts-layout')
@section('content')


@foreach ($categories as $category)
  <p> <a href="{{route('category.show', $category->name)}}">{{$category->name}}</a></p><br>
@endforeach

@stop
