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
}
