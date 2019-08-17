<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{
    //
    public function update(Task $task){
    	//dd('hello');
    	//dd($task);

    	$task->update([
    		'completed' => request()->has('completed')
    	]);

    	return back();
    }

    public function store(Project $project){

    	Task::create([
    		'project_id' => $project->id,
    		'decription' => request('description')

    	]);

    	return back();

    }
}
