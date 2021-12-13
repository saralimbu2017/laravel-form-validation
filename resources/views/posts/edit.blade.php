@extends('layouts.app')

@section('content')

  <h1>Edit Post</h1>
  {!! Form::model($post,['method' => 'PATCH','route' => ['posts.update',$post->id]]) !!}
    @csrf 

    <div class="form-group">

      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    
    </div>

    <div class="form-group">

      {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
    </div>
  {!! Form::close() !!}
@endsection