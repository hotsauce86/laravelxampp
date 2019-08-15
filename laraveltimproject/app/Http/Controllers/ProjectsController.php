<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;


class ProjectsController extends Controller
{


	public function index(){

		$projects = Project::all();

		//return $projects;
		// $projects = Project::all();
	 return view('projects.index', compact('projects'));

	//	return view('projects.index');
	}

	public function create(){
		return view ('projects.create');
	}


	// public function show($id){
 //        $project =Project::findOrFail($id);
	// 	return view('projects.show', compact('project'));
	// }

	public function show(Project $project){
        return $project;
		return view('projects.show', compact('project'));
	}


	public function edit($id){

		//return $id;

		$project = Project::find($id);

		return view('projects.edit', compact('project'));
		 //return view('projects.edit');
	}

	public function update($id){


		 $project = Project::find($id);

		 $project->title = request('title');
		 $project->description = request('description');

		 $project->save();

		 return redirect('/projects');
	}

	public function destroy(Project $project){

		//dd('hello');

		//Project::findOrFail($id)->delete();
		$project->delete();
		return redirect('/projects');
	}


	public function store(){

		Project::create([
			'title' => request('title'),
			'description' => request('description')
		]);

		// $project = new Project();
		// $project->title = request('title');
		// $project->description = request('description');
		// $project->save();

		return redirect('/projects');
		//return request()->all();
	}

}

