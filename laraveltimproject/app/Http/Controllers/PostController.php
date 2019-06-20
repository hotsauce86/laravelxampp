<?php

namespace App\Http\Controllers;


class PostController extends Controllers
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

}

