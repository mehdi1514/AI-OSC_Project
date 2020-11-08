@extends('layouts.app')

@section('content')
    <h1>Doctors</h1><br>

    {!! Form::open(['action' => 'DoctorsController@search', 'method' => 'GET']) !!}
        <div class="form-group">
            {{Form::text('specialization', '', ['class' => ['form-control', 'float-right'], 'placeholder' => 'Search by Specialization'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
    {!! Form::close() !!}

    @if(count($doctors) > 0)
        @foreach ($doctors as $doctor)
            <div class="card bg-light" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3><a href="/doctors/{{$doctor->id}}" style="color: #2EBCD4">{{$doctor->name}}</a></h3>
                <h3 style="color: #2EBCD4">{{$doctor->email}}</h3>
                <h4 style="color: #2EBCD4">{{$doctor->specialization}}</h4>
                <small>Joined on {{$doctor->created_at}}</small>
                <div class="row text-center">
        
                    <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '9 - 10')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
                    @if (count($taken) > 0)
                        <div class="col-2 ml-2 mr-2"><a href="/#" class="btn btn-primary"><del>9 - 10</del></a></div>
                    @else
                        <div class="col-2 ml-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/9 - 10" class="btn btn-primary">9 - 10</a></div>
                    @endif
                    
                    <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '11 - 12')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
                    @if (count($taken) > 0)
                        <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>11 - 12</del></a></div>
                    @else
                        <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/11 - 12" class="btn btn-primary">11 - 12</a></div>
                    @endif
            
                    <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '1 - 2')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
                    @if (count($taken) > 0)
                        <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>1 - 2</del></a></div>
                    @else
                        <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/1 - 2" class="btn btn-primary">1 - 2</a></div>
                    @endif
                    
                    <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '3 - 4')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
                    @if (count($taken) > 0)
                        <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>3 - 4</del></a></div>
                    @else
                        <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/3 - 4" class="btn btn-primary">3 - 4</a></div>
                    @endif
            
                    <div class="d-none">{!!$taken = DB::table('appointments')->where('timeslot', '=', '5 - 6')->where('doctor_id', '=', $doctor->id)->get()!!}</div>
                    @if (count($taken) > 0)
                        <div class="col-2 mr-2"><a href="/#" class="btn btn-primary"><del>5 - 6</del></a></div>
                    @else
                        <div class="col-2 mr-2"><a href="/appointments/create/{{$doctor->id}}/5 - 6" class="btn btn-primary">5 - 6</a></div>
                    @endif
                    
                    
                </div>
            </div>
        @endforeach
        {{$doctors->links('inc.pagination')}}
    @else
        <p>No doctors found</p>
    @endif

    @if (!Auth::guest())
        @if (Auth::user()->email == 'admin@gmail.com')
            <a href="/doctors/create" class="btn btn-primary">Add Doctors</a>
        @endif
    @endif
@endsection
        -->