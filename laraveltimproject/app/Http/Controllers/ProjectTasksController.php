<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{
    //
    public function update(){
    	dd('hello');
    	//dd($task);

    	// $task->update([
    	// 	'completed' => request()->has('completed')
    	// ]);

    	// $task->complete(request()->has('completed'));

    	//return back();
    }

    public function store(Project $project){

    	// $attributes = request()->validate(['description' => 'required']);

    	// $project->addTask($attributes);

    	// $project->addTask(
    	// 	request()->validate(['description'] => required);
    	// );

    	Task::create([
    		'project_id' => $project->id,
    		'description' => request('description')

    	]);

    	return back();

    }
}
