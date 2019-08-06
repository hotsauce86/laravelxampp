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
		return view('posts.index');
	}


	public function store(Request $request){

		Post::create($request->all());
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

		$people = ['Tim', 'peter', 'clancy', 'bill'];
		return view('contact', compact('people'));
	}

	public function show_post($id, $name, $password){
		//return view('post')->with('id', $id);

		return view('post', compact('id', 'name', 'password'));
	}

	public function about(){
		return view('about');
	}


	public function read_post(){
		$results = \DB::select('select * from posts where id = ?', [2]);
		return view('read', ['post' => 'tim']);

			//return view('read', compact($results));
			// foreach ($results as $post) {
			// 	return $post->title;
			// }

	}

	public function quick_fill_post(){



		//nevermind, i put it in routes directly

		// but just in case

	// 	DB::insert('insert into posts(title, content) values(?,?)', ['Php with laravel', 'some stuff goes here but hwat']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['Wubba lubba', ' dab dab']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['who moved my cheese', 'is really good about teaching you organizational skills']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['My day is ruined', 'Im wworking 8 hours a day and have little time for laravel :(']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['Laravel test', 'filling the database with filler values']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['I should use a insert generator for this', 'sbut hardcoding is simple']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['ok, that should be', 'enough']);
	// DB::insert('insert into posts(title, content) values(?,?)', ['just in case it was not', 'enough']);
	}
}

