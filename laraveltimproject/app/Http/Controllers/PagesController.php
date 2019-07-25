<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //


    public function home(){

	    	$tasks = [
			'go to the store',
			'get a loaf of bread',
			'buy some milk',
			'wait for snow',
			'NOW WITH PAGES!!!'
		];

		return view ('welcome', [
			'tasks' => $tasks
		]);
    }

    public function create_page_counter(){
    	\DB::insert('insert into page_counter(counter) values(?)', 0);
    }

 	public function create_something_different(){
 		$tasks = [
 			'go get the food',
 			'im starving',
 			'fuck the police coming straigt from the underground',
 			'dosent matter that im black or im brown',
 			'100 miles an runnin',
 			
 		];
 	}

 	public function load_form_page(){
 		return view('form');
 	}
}
