<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{


	public function index(){

		$projects = Project::all();
		return view('projects.index', compact('projects'));
	}

	public function create(){
		return view ('projects.create');
	}

	public function store(){
		return request()->all();
	}

}

