@extends('layouts.app')

@section('content')
    <br>
    <a href="/appointments/create" class="btn btn-primary float-right">Book Appointment</a>
    <a href="/doctors" class="btn btn-default">Go Back</a>
    <h1 class="display-4">{{$doctor->name}}</h1>
    <p>{{$doctor->email}}</p>
    <hr>
    {{-- <small>Written on {{$doctor->created_at}} by {{$doctor->user->name}}</small> --}}
    <h4 style="color: #2EBCD4">{{$doctor->specialization}}</h4>
    {{-- <div class="row text-center">
        
        <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '9 - 10')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
        @if (count($taken) > 0)
            <div class="col-2 ml-2 mr-2"><a href="/#" class="btn btn-primary"><del>9 - 10</del></a></div>
        @elseif(Auth::guest())
            <div class="col-2 ml-2 mr-2"><a href="/login" class="btn btn-primary">9 - 10</a></div>
        @else
            <div class="col-2 ml-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/9 - 10" class="btn btn-primary">9 - 10</a></div>
        @endif
        
        <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '11 - 12')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
        @if (count($taken) > 0)
            <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>11 - 12</del></a></div>
        @elseif(Auth::guest())
            <div class="col-2 ml-2 mr-2"><a href="/login" class="btn btn-primary">9 - 10</a></div>
        @else
            <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/11 - 12" class="btn btn-primary">11 - 12</a></div>
        @endif

        <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '1 - 2')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
        @if (count($taken) > 0)
            <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>1 - 2</del></a></div>
        @elseif(Auth::guest())
            <div class="col-2 ml-2 mr-2"><a href="/login" class="btn btn-primary">9 - 10</a></div>
        @else
            <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/1 - 2" class="btn btn-primary">1 - 2</a></div>
        @endif
        
        <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '3 - 4')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
        @if (count($taken) > 0)
            <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>3 - 4</del></a></div>
        @elseif(Auth::guest())
            <div class="col-2 ml-2 mr-2"><a href="/login" class="btn btn-primary">9 - 10</a></div>
        @else
            <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/3 - 4" class="btn btn-primary">3 - 4</a></div>
        @endif

        <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '5 - 6')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
        @if (count($taken) > 0)
            <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>5 - 6</del></a></div>
        @elseif(Auth::guest())
            <div class="col-2 ml-2 mr-2"><a href="/login" class="btn btn-primary">9 - 10</a></div>
        @else
            <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/5 - 6" class="btn btn-primary">5 - 6</a></div>
        @endif
        
        
    </div> --}}
    <br>

    {{-- <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-info">Edit</a>

    {{Form::open(['action' => ['DoctorsController@destroy', $doctor->id], 'method' => 'POST', 'class' => 'float-right'])}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {{Form::close()}} --}}

    @if (!Auth::guest())
        @if (Auth::user()->email == 'admin@gmail.com')
            <a href="/doctors/{{$doctor->id}}/edit" class="btn btn-info">Edit</a>
            {{Form::open(['action' => ['DoctorsController@destroy', $doctor->id], 'method' => 'POST', 'class' => 'float-right'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @endif
    @endif
   
    
@endsection