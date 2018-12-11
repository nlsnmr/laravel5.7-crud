@extends('layout')
@section('title', 'show')
@section('content')

    <h1 class="title">edit</h1>
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



