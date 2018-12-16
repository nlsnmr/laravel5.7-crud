@extends('layout')
@section('title', 'show')
@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
        <ul>
          <li><a href="/projects">Projects list</a></li>
          <li class="is-active"><a href="#" aria-current="page">Project details</a></li>
        </ul>
      </nav>

    <div class="box">
        <div class="content">
            <h1 class="title">Project details</h1>
        </div>
    </div>
    <div class="content">
            <h3>{{$project->title}}</h3>
    </div>
    <div class="content">
        {{$project->description}}
        <p>
            <a href="/projects/{{$project->id}}/edit">edit</a>
        </p>
    </div>

    <div class="box">
        <div class="content">
            <h3>Project tasks</h3>
        </div>
        @if ($project->tasks->count())
            <div class="box">
                @foreach ($project->tasks as $task)
                    <div>
                        <form method="POST" action="/completed-tasks/{{$task->id}}">
                            @if ($task->completed)
                                @method('DELETE')
                            @endif
                            
                            @csrf
                            <label class="checkbox  {{$task->completed ? 'is-complete':''}}" for="completed">
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked':''}}>
                                {{$task->description}}
                            </label>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- add a new task form --}}
        <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
            @csrf
            <div class="field">
                <label class="label for="description">New Task</label>
                <div class="control">
                    <input type="text" class="input" name="description" placeholder="New Task" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Add task</button>
                </div>

            </div>

            @include('errors')

        </form>
    </div>
@endsection



