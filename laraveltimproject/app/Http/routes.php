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

Route::get('/about', function () {
    return "hello about page";
});

Route::get('/contacts', function () {
    return "timt173@gmail.com";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "welcome :" . $name . " " . $id;
});
