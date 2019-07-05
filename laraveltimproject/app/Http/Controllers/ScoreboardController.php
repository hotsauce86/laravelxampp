<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class ScoreboardController extends Controller
{
   // use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


	public function retrieve_scores(){
		$results = \DB::select('select * from scoreboard where id = ?', [1]);
		return view('scoreboard', compact($results));
	}
}


