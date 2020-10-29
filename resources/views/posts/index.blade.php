@extends('layouts.app')

@section('content')
    <h1>Posts</h1><br>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light" style="margin-top: 10px; margin-bottom:10px; padding: 10px">
                <h3><a href="/posts/{{$post->id}}" style="color: #2EBCD4">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links('inc.pagination')}}
    @else
        <p>No posts found</p>
    @endif
@endsection