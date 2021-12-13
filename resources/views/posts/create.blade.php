@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>
  <!-- <form method="post" action="/posts"> -->
  {!! Form::open(['method' => 'POST','route' => 'posts.store']) !!}
    @csrf 
    <input type="text" name="title" placeholder="Enter title">
    <input type="submit" name="submit">
  <!-- </form> -->

@endsection
