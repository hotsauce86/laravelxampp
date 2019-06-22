<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class PostController extends Controller
{
	public function create($id){
		return "i am being creative";
	}

	public function index($id){
		return "its working now : " . $id;
	}

	public function show($id){
		return "this is the show method!";
	}


	public function destroy($id){
		
	}

	public function contact(){
		return view('contact');
	}

	public function show_post($id, $name, $password){
		//return view('post')->with('id', $id);

		return view('post', compact('id', 'name', 'password'));
	}

}

