<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "hello about page";
// });

// Route::get('/contacts', function () {
//     return "timt173@gmail.com";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "welcome :" . $name . " " . $id;
// });


// Route::get('/admin/posts/example', array('as'=>'admin.home', function(){
// 	$url = route('admin.home');

// 	return "this url is : ". $url;

// }));

// Route::get('/testlayout', function () {
// 		return view('testlayout');
// });













/*
				ROUTES USING A CONTROLLER!!!



*/

//Route::get('/post/{id}', 'PostController@index');
//Route::resource('posts', 'PostController');

Route::get('/contact', 'PostController@contact');


Route::get('/about', 'PostController@about');

Route::get('/post/{id}/{name}/{password}', 'PostController@show_post');


// Route::get('/about', function (){
// 		return view('about');
// });


