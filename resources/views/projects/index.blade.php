@extends('projects.layout')
@extends('projects.navbar')

@section('content')
@if ($projects->count())    
    <?php $x = 1; ?>
    <table class="table is-hoverable is-fullwidth">
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td style="width:20px">{{ $x++ }}</td>
                <td><a href="{{ action('ProjectsController@show', $project->id) }}">{{ $project->title }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No projects found for this user</p>
@endif
@endsection

{{-- HERO/TITLE --}}

@section('page-title')
My Projects
@endsection
@include('projects.title')