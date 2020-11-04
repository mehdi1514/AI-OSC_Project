@extends('layouts.app')
@section('content')
    <h1>Edit Doctor's Information</h1>
    {!! Form::open(['action' => ['DoctorsController@update', $doctor->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $doctor->name, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'e-mail')}}
            {{Form::text('email', $doctor->email, ['class' => 'form-control', 'placeholder' => 'Enter e-mail'])}}
        </div>
        <div class="form-group">
            {{Form::label('specialization', 'Specialization')}}
            {{Form::text('specialization', $doctor->specialization, ['class' => 'form-control', 'placeholder' => 'Enter Specialization'])}}
        </div>
        <div class="form-group">
            {{Form::label('salary', 'Salary')}}
            {{Form::text('salary', $doctor->salary, ['class' => 'form-control', 'placeholder' => 'Enter Salary'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!}
@endsection