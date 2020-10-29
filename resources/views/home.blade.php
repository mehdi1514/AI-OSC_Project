@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <a href="/posts/create" class="btn btn-secondary float-right">+ Create Post</a>
<!--    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
-->
    <br><br>
    @if (count($posts) > 0)
        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                    <td>
                        {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])}}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{Form::close()}}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p style="font-size: 25px;">You haven't created any posts yet🙁</p>
    @endif
    
</div>
@endsection
