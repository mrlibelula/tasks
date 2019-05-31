<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function update(Task $task, Request $request) {
        // dd($request->all()) ;
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

    public function store(Project $project) {
        Task::create(request()->validate([
            'description' => ['required', 'min:3', 'max:191']
        ]) + ['project_id' => $project->id]);
        return back();
    }
    
}
