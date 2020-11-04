@extends('layouts.app')

@section('content')
    <br>
    <a href="/doctors" class="btn btn-default">Go Back</a>
    <h1 class="display-4">{{$doctor->name}}</h1>
    <p>{{$doctor->email}}</p>
    <hr>
    {{-- <small>Written on {{$doctor->created_at}} by {{$doctor->user->name}}</small> --}}
    <h4 style="color: #2EBCD4">{{$doctor->specialization}}</h4>
    <br>

    {{-- <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-info">Edit</a>

    {{Form::open(['action' => ['DoctorsController@destroy', $doctor->id], 'method' => 'POST', 'class' => 'float-right'])}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {{Form::close()}} --}}

    @if (!Auth::guest())
        @if (Auth::user()->email == 'admin@gmail.com')
            <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-info">Edit</a>
            {{Form::open(['action' => ['PostsController@destroy', $doctor->id], 'method' => 'POST', 'class' => 'float-right'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @endif
    @endif
   
    
@endsection