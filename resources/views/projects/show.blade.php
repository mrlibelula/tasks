@extends('projects.layout')
@extends('projects.navbar')

@section('content')
<div style="margin-bottom:2rem">{{ $project->description }}</div>

@if ($project->tasks->count())
    <div class="panel">
        <p class="panel-heading">
            <i class="fas fa-tasks fa-xs"></i>
            Tasks
        </p>
        @foreach ($project->tasks as $task)
        <div class="panel-block">
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('PATCH')
                <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->description }}
                </label>
            </form>
        </div>
        @endforeach
    </div>
@else
    {{-- No tasks --}}
@endif    

@include('projects.errors')

<div class="notification is-light" style="margin-top:2rem">
    <form class="form" action="/projects/{{ $project->id }}/tasks" method="POST">
        @csrf
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="description" placeholder="New task description..." required>
            </div>
        </div>
        <div class="field" style="margin-bottom:-15px">
            <div class="control">
                <button class="button is-dark is-small is-rounded" type="submit">Add Task</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('nav-page')
<div class="container">
    <div class="buttons has-addons" style="margin:10px 0px -20px 10px">
        <div class="field is-grouped">
            <form action="{{ action('ProjectsController@edit', $project->id) }}" method="GET">
                @csrf
                <input type="submit" class="button is-text" value="Edit">
            </form>
            <form action="{{ action('ProjectsController@destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="button is-text" value="Delete">
            </form>
            <form action="{{ action('ProjectsController@index') }}" method="GET">
                @csrf
                <input type="submit" class="button is-text" value="List">
            </form>
        </div>
    </div>

</div>
@endsection

{{-- HERO/TITLE --}}
@section('page-title')
{{ $project->title }}
@endsection
@include('projects.title')