@extends('projects.layout')
@extends('projects.navbar')

@section('content')
<div>{{ $project->description }}</div>
@endsection

@section('nav-page')
<div class="container">
    {{-- <form class="form" action="{{ action('ProjectsController@destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="field is-grouped">
            <div class="buttons has-addons" style="margin:10px 0px -20px 10px">
                <a href="{{ action('ProjectsController@edit', $project->id) }}" class="button is-text">Edit</a>
                <input type="submit" class="button is-text" value="Delete">
                <a href="{{ action('ProjectsController@index') }}" class="button is-text">List</a>
            </div>
        </div>
    </form> --}}
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