@extends('layouts.app')

@section('content')
    <h1>Change Date/Time</h1>
    {!! Form::open(['action' => ['AppointmentsController@update', $appointment->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('doctor', 'Select Doctor')}}
            {!! Form::select('doctor', $doctors, $doctor->id, array("class" => "dropdown-item bg-info", "placeholder" => "Choose doctor")); !!}
        </div>
        <div class="form-group">
            {{Form::label('time_slot', 'Select Time Slot')}}
            {!! Form::select('time_slot', array('9 AM - 10 AM' => '9 AM - 10 AM', '11:00 AM - 12:00 AM' => '11:00 AM - 12:00 AM', '01:00 PM - 02:00 PM' => '01:00 PM - 02:00 PM', '03:00 PM - 04:00 PM' => '03:00 PM - 04:00 PM', '05:00 PM - 06:00 PM' => '05:00 PM - 06:00 PM'), $appointment->timeslot, array("class" => "dropdown-item bg-info", "placeholder" => "Choose time slot")); !!}
        </div>
        <div class="form-group">
            <label for="date">Select date</label><br>
            <input type="date" name="date" value="{{$appointment->date}}" placeholder="select date" required>
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Change', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!} 
@endsection