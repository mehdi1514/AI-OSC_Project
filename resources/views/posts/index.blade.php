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
        {{$posts->links('inc.pagination')}}
    @else
        <p>No feedback found</p>
    @endif
@endsection