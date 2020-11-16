@extends('layouts.app')
@section('content')
    <h1>Give Your Feedback!</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('doctor', 'Select Doctor')}}
            {!! Form::select('doctor', $doctors, null, array("class" => "dropdown-item bg-info", "placeholder" => "Choose doctor")); !!}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!}
@endsection