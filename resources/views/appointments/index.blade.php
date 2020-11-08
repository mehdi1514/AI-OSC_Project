@extends('layouts.app')

@section('content')
    {{-- <h1>Your Appointments - {{$appointments->user->name}}</h1><br> --}}

    {{-- {!! Form::open(['action' => 'DoctorsController@search', 'method' => 'GET']) !!}
        <div class="form-group">
            {{Form::text('specialization', '', ['class' => ['form-control', 'float-right'], 'placeholder' => 'Search by Specialization'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!} --}}
    <a href="appointments/create" class="btn btn-info float-right">Book an Appointment</a>
    <br><br>
    @if(count($appointments) > 0)
        @foreach ($appointments as $appointment)
            <div class="shadow p-3 mb-5 bg-white rounded" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3 style="color: #2EBCD4">{{"Dr. " . $appointment->doctor->name}}</h3>
                <h6 style="color: gray">{{$appointment->timeslot}}</h6>
                <a href="/appointments/{{$appointment->id}}" class="btn btn-info">Details</a>
            </div>
        @endforeach
        {{-- {{$appointments->links('inc.pagination')}} --}}
    @else
        <p>No appointments found</p>
    @endif

    {{-- @if (!Auth::guest())
        @if (Auth::user()->email == 'admin@gmail.com')
            <a href="/doctors/create" class="btn btn-primary">Add Doctors</a>
        @endif
    @endif --}}
@endsection