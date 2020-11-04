@extends('layouts.app')
@section('content')
    <h1>Add a Doctor</h1>
    {!! Form::open(['action' => 'DoctorsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'e-mail')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter e-mail'])}}
        </div>
        <div class="form-group">
            {{Form::label('specialization', 'Specialization')}}
            {{Form::text('specialization', '', ['class' => 'form-control', 'placeholder' => 'Enter Specialization'])}}
        </div>
        <div class="form-group">
            {{Form::label('salary', 'Salary')}}
            {{Form::text('salary', '', ['class' => 'form-control', 'placeholder' => 'Enter Salary'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!}
@endsection