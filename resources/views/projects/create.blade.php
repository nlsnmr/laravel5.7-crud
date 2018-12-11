@extends('layout')
@section('title', 'create')
@section('content')

    <h1 class="title">create</h1>
    <form method="POST" action="/projects" style="margin-bottom:1em;">
        {{ csrf_field() }}

        @include('errors')

          <div class="field">
              <label class="label" for="title">Title</label>
              <div>
              <input class="input  {{$errors->has('title')?'is-danger':''}}" type="text" name="title" placeholder="Title" value="{{old('title')}}" required>
              </div>
          </div>
          <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                        <textarea class="textarea {{$errors->has('description')?'is-danger':''}}" name="description" required>{{old('description')}}</textarea>
                </div>
            </div>
          <div class="field">
              <div class="control">
                    <button type="submit" class="button is-link">Create Project</button>
              </div>
          </div>
      </form>
@endsection