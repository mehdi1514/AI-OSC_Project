@extends('layouts.app')

@section('content')
    <br>
    <h1 class="display-4">{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <br>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @endif
    @endif
   
    
@endsection