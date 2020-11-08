@extends('layouts.app')

@section('content')
    <h2>{{"Dr. " . $doctor->name}}</h2>
    <h4>{{"Specialization: " . $doctor->specialization}}</h4>
    <p style="font-size: 16px">{{"Email: " . $doctor->email}}</p>
    <br><br>

    <p>You booked the appointment for the time slot {{$appointment->timeslot}} on {{$appointment->date}}</p>
    <a href="/appointments/{{$appointment->id}}/edit" class="btn btn-info">Change Appointment Date/Time</a>
    {{Form::open(['action' => ['AppointmentsController@destroy', $appointment->id], 'method' => 'POST', 'class' => 'float-right'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Cancel Appointment', ['class' => 'btn btn-danger'])}}
    {{Form::close()}}
@endsection