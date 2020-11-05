@extends('layouts.app')

@section('content')
    {{-- <h1>Your Appointments - {{$appointments->user->name}}</h1><br> --}}

    {{-- {!! Form::open(['action' => 'DoctorsController@search', 'method' => 'GET']) !!}
        <div class="form-group">
            {{Form::text('specialization', '', ['class' => ['form-control', 'float-right'], 'placeholder' => 'Search by Specialization'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!} --}}

    @if(count($appointments) > 0)
        @foreach ($appointments as $appointment)
            <div class="card bg-light" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3 style="color: #2EBCD4">{{$appointment->timeslot}}</h3>
                <h3 style="color: #2EBCD4">{{$appointment->doctor->name}}</h3>
                <small>Appointment made on {{$appointment->created_at}}</small>
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