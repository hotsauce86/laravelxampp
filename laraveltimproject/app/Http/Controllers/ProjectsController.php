<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Projects;

class ProjectsController extends Controller
{


	public function index(){

		$projects = Project::all();
		return view('projects.index', compact('projects'));
	}

	public function create(){
		return view ('projects.create');
	}

	public function store(){


		$project = new Project();

		$project->title = request('title');
		$project->description = request('description');

		$projects->save();

		return redirect('/projects');
		//return request()->all();
	}

}

