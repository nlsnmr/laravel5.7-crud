@extends('layout')
@section('title', 'show')
@section('content')

<nav class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
        <ul>
          <li><a href="/projects">Projects list</a></li>
          <li><a href="/projects/{{$project->id}}">Project details</a></li>
          <li class="is-active"><a href="#" aria-current="page">Edit project</a></li>
        </ul>
      </nav>

    <div class="box">
        <div class="content">
            <h1 class="title">Edit project</h1>
        </div>
    </div>
    <form method="POST" action="/projects/{{$project->id}}" style="margin-bottom:1em;">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="field">
              <label class="label" for="title">Title</label>
              <div>
              <input class="input" type="text" name="title" placeholder="Title" value="{{$project->title}}">
              </div>
          </div>
          <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                        <textarea class="textarea" name="description">{{$project->description}}</textarea>
                </div>
            </div>
          <div class="field">
              <div class="control">
                    <button type="submit" class="button is-link">Update Project</button>
              </div>
          </div>
      </form>

    @include('errors')
    <form method="POST" action="/projects/{{$project->id}}">
        @method('DELETE')
        @csrf
      <div class="field">
            <div class="control">
                  <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection



