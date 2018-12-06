@extends('layout')
@section('title', 'Welcome')
@section('content')

    <h1>my first web</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
       @endforeach 
    </ul>

@endsection