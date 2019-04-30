@extends('projects.layout')
@extends('projects.navbar')

@section('content')

@include('projects.errors')
<form class="form" action="{{ action('ProjectsController@update', $project->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="field">
        <input 
            class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
            style="{{ $errors->has('title') ? 'background: #ffe4e5' : '' }}"
            value="{{ $project->title }}" 
            type="text" 
            name="title" 
            placeholder="Title" 
            autofocus 
            required
        >
    </div>
    <div class="field">
        <textarea 
            class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" 
            style="{{ $errors->has('description') ? 'background: #ffe4e5' : '' }}"
            name="description" 
            placeholder="Description" 
            required
        >{{ $project->description }}</textarea>
    </div>
    <div class="field">
        <button class="button is-dark" type="submit">Edit Project</button>
        <a href="{{ action('ProjectsController@index') }}">
            <button class="button is-text" type="button">Cancel</button>
        </a>
    </div>
</form>

@endsection

{{-- HERO/TITLE --}}
@section('page-title')
Edit Project
@endsection
@include('projects.title')