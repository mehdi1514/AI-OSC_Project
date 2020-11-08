@extends('layouts.app')

@section('content')
    <h2>{{"Dr. " . $doctor->name}}</h2>
    <h4>{{"Specialization: " . $doctor->specialization}}</h4>
    <p style="font-size: 16px">{{"Email: " . $doctor->email}}</p>
    <br><br>

    @if(Auth::user()->email == 'admin@gmail.com')
        <div class="d-none">{{$u = DB::table('users')->where('id', '=', $appointment->user_id)->get()}}</div>
        {{-- <p>{{$u->name}} booked an appointment for the time slot {{$appointment->timeslot}} on {{$appointment->date}}</p> --}}
        <p>User ID: {{$appointment->user_id}} booked an appointment for the time slot {{$appointment->timeslot}} on {{$appointment->date}}</p>
    @else
        <p>You booked an appointment for the time slot {{$appointment->timeslot}} on {{$appointment->date}}</p>
    @endif
    
    <a href="/appointments/{{$appointment->id}}/edit" class="btn btn-info">Change Appointment Date/Time</a>
    {{Form::open(['action' => ['AppointmentsController@destroy', $appointment->id], 'method' => 'POST', 'class' => 'float-right'])}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Cancel Appointment', ['class' => 'btn btn-danger'])}}
    {{Form::close()}}
@endsection