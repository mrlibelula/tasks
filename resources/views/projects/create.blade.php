@extends('projects.layout')
@extends('projects.navbar')

@section('content')
    @include('projects.errors')

    <form class="form" action="{{ action('ProjectsController@store') }}" method="POST">
        @csrf
        <div class="field">
            <input 
                class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
                style="{{ $errors->has('title') ? 'background: #ffe4e5' : '' }}"
                value="{{ old('title') }}" 
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
            >{{ old('description') }}</textarea>
        </div>
        <div class="field">
            <button class="button is-dark" type="submit">Save Project</button>
            <a href="{{ action('ProjectsController@index') }}">
                <button class="button is-text" type="button">Cancel</button>
            </a>
        </div>
    </form>
    
@endsection

{{-- HERO/TITLE --}}
@section('page-title')
Create Project
@endsection
@include('projects.title')