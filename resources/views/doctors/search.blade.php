@extends('layouts.app')

@section('content')
    <h1>Doctors</h1><br>

    <a href="/doctors" class="btn btn-info">Go Back</a>

    @if(count($doctors) > 0)
        @foreach ($doctors as $doctor)
            <div class="card bg-light" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3><a href="/doctors/{{$doctor->id}}" style="color: #2EBCD4">{{$doctor->name}}</a></h3>
                <h3 style="color: #2EBCD4">{{$doctor->email}}</h3>
                <h4 style="color: #2EBCD4">{{$doctor->specialization}}</h4>
                <small>Joined on {{$doctor->created_at}}</small>
            </div>
        @endforeach
        {{$doctors->links('inc.pagination')}}
    @else
        <p>No doctors found</p>
    @endif
    
@endsection