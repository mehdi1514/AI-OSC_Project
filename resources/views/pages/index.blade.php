@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">{{config('app.name', 'No name')}}</h1>
        <p>This is the CRUD app</p>
        <p>
            <a href="/login" class="btn btn-info btn-lg">Login</a>
            <a href="/register" class="btn btn-info btn-lg">Register</a>
        </p>
    </div>
@endsection