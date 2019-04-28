@extends('projects.layout')
@extends('projects.navbar')

@section('content')
<h1 class="title">{{ $project->title }}</h1>

<div>{{ $project->description }}</div>
@endsection

@section('nav-page')
<form class="form" action="" method="POST">
    @csrf
    @method('DELETE')
    <div class="field is-grouped">
        <div class="buttons has-addons" style="margin:10px 0px -20px 10px">
            <a href="{{ action('ProjectsController@edit', $project->id) }}" class="button is-text">Edit</a>
            <input type="submit" class="button is-text" value="Delete">
            <a href="{{ action('ProjectsController@index') }}" class="button is-text">List</a>
        </div>
    </div>
</form>
@endsection

{{-- HERO --}}
{{-- 
@section('hero-title')
My Projects
@endsection
@section('hero-description')
Full Stack WebDev Apps
@endsection
@include('projects.hero') --}}