@extends('layout')
@section('title', 'Projects')
@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
    <ul>
        <li class="is-active"><a href="#" aria-current="page">Projects list</a></li>
    </ul>
</nav>
<div class="box">
    <h1 class="title">Projects list</h1>
</div>
    @foreach($projects as $project)
        <a class="box" href="/projects/{{$project->id}}">
            <div class="content">
                <p>
                    <strong>{{$project->title}}</strong><br>
                    {{$project->description}}<hr>
                    <small>Created: {{$project->created_at}}</small>
                </p>
            </div>
        </a>
        <br>
    @endforeach 
@endsection