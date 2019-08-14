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


	public function show(){


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

	public function destroy(){

	}


	public function store(){


		$project = new Project();

		$project->title = request('title');
		$project->description = request('description');

		$project->save();

		return redirect('/projects');
		//return request()->all();
	}

}

