<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class PostController extends Controller
{
	// public function create($id){
	// 	return "i am being creative";
	// }

	public function create(){
		return view('posts.create');
	}


	public function store(Request $request){

		Post::create($request->all());
	}

	// public function index($id){
	// 	return "its working now : " . $id;
	// }

	public function index(){
		//$posts = Post::all();

		//index is not set to receive these vars yet
		//might be an issue, blame the dev (oh wait thats me)
		//return view('posts.index', compact('posts'));
		return view('posts.index');
	}

	// public function show($id){
	// 	//return "this is the show method!";

	// 	$post = Post::findOrFail($id);

	// 	return view('posts.show', compact('post'));
	// }


	public function edit ($id){
		$post = Post::findOrFail($id);
		return view('post.edit', compact('post'));
	}



	// public function show_post($id, $name, $password){
	// 	//return view('post')->with('id', $id);

	// 	return view('post', compact('id', 'name', 'password'));
	// }

	public function about(){
		return view('about');
	}


	// public function contact(){

	// 	$people = ['Tim', 'peter', 'clancy', 'bill'];
	// 	return view('contact', compact('people'));
	// }


}

