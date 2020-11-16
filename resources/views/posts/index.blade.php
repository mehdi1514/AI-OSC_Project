@extends('layouts.app')

@section('content')
    <h1>Feedback</h1><br>
    {{-- <a href="/posts/create" class="btn btn-secondary float-right">+ Give Feedback</a> --}}
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3><a href="/posts/{{$post->id}}" style="color: #2EBCD4">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}} for Dr. {{$post->doctor->name}}</small>
            </div>
        @endforeach
        {{-- {{$posts->links('inc.pagination')}} --}}
    @else
        <p>No feedback found</p>
    @endif

    <div class="row">
        <div class="col-sm">
            <a href="/appointments/create">
                <div class="text-center" style="border-radius: 10px; box-shadow: 5px 10px 8px 10px #888888; padding: 10px;">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/3538/3538294.svg" alt="" width="150px"><br><br>
                    <p style="font-size: 2em; color: black;">Book an appointment</p>
                </div>
            </a>
        </div>
        <div class="col-sm">
            <a href="http://localhost:5000/direction">
                <div class="text-center" style="border-radius: 10px; box-shadow: 5px 10px 8px 10px #888888; padding: 10px;">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/3577/3577175.svg" alt="" width="150px"><br><br>
                    <p style="font-size: 2em; color: black;">Search nearest hospital</p>
                </div>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm">
            <a href="http://localhost:5000/hospitals">
                <div class="text-center" style="border-radius: 10px; box-shadow: 5px 10px 8px 10px #888888; padding: 10px;">
                    <img src="https://www.flaticon.com/premium-icon/icons/svg/3295/3295149.svg" alt="" width="150px"><br><br>
                    <p style="font-size: 2em; color: black;">Look for nearby hospitals</p>
                </div>
            </a>
        </div>
        <div class="col-sm">
            <a href="/heart">
                <div class="text-center" style="border-radius: 10px; box-shadow: 5px 10px 8px 10px #888888; padding: 10px;">
                    <img src="https://www.flaticon.com/premium-icon/icons/svg/3389/3389223.svg" alt="" width="150px"><br><br>
                    <p style="font-size: 2em; color: black;">Check for heart disease</p>
                </div>
            </a>
        </div>
    </div>
@endsection