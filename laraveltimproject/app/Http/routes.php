<?php


use App\Post;
use App\User;
use App\Score;

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

Route::get('/', 'PagesController@home');


/*
|----------------------------------------------
				ROUTES USING A CONTROLLER!!!
|----------------------------------------------
*/

//Route::get('/post/{id}', 'PostController@index');
//Route::resource('posts', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('/about', 'PostController@about');

Route::get('/post/{id}/{name}/{password}', 'PostController@show_post');

Route::get('/read', 'PostController@read_post');
// Route::get('/read', function(){
// 	$results = DB::select('select * from posts where id = ?', [2]);
// 	foreach ($results as $post) {
// 		return $post->title;
// 	}
	
// });


Route::get('/find', function(){


	$posts = Post::all();
	foreach ($posts as $post) {
		# code...
		return $post->title;
	}


	// $posts = Post::where('id',3)->orderBy('id', 'desc')->take(1)-get();
	// return $posts;

	// $posts = Post::findOrFail(2);
	// return $posts;

	// $posts = Post::where('users_count', '<', 50)->firstOrFail();
});


Route::get('/basicinsert', function(){

	#adds to table 'Post'
	// $post = new Post;
	// $post->title = 'New title insert1';
	// $post->body ='awesome this is so cool wow 5 stars thumbs up errebody!';
	// $post->save;


	#updates values of object at id 2 in 'Post' Table
	$post = Post::find(2);
	$post->title = 'New title insert1';
	$post->body ='awesome this is so cool wow 5 stars thumbs up errebody!';
	$post->save();


});

	Route::get('/create', 'PostController@create');

// Route::get('/create', function(){
// 	#uses Post.php Protected Fillable to allow writing
// 	// Post::create(['title'=>'the create method', 'body'=>'some blah blah blanc ah oui oui ez enerph?']);
// });

Route::get('/insert', function(){
	DB::insert('insert into posts(title, content) values(?,?)', ['Php with laravel', 'some stuff goes here but hwat']);
});

Route::get('/quickfillposts', function(){
	DB::insert('insert into posts(title, content) values(?,?)', ['Php with laravel', 'some stuff goes here but hwat']);
	DB::insert('insert into posts(title, content) values(?,?)', ['Wubba lubba', ' dab dab']);
	DB::insert('insert into posts(title, content) values(?,?)', ['who moved my cheese', 'is really good about teaching you organizational skills']);
	DB::insert('insert into posts(title, content) values(?,?)', ['My day is ruined', 'Im wworking 8 hours a day and have little time for laravel :(']);
	DB::insert('insert into posts(title, content) values(?,?)', ['Laravel test', 'filling the database with filler values']);
	DB::insert('insert into posts(title, content) values(?,?)', ['I should use a insert generator for this', 'sbut hardcoding is simple']);
	DB::insert('insert into posts(title, content) values(?,?)', ['ok, that should be', 'enough']);
	DB::insert('insert into posts(title, content) values(?,?)', ['just in case it was not', 'enough']);
});

Route::get('/update', function(){
		// Post::where('id', 2)->where('is_admin', 0)->update(['title
		// 	'=>'NEW PHP TITLE', 'content'=>'iluvdogsorwhatever']);
});

Route::get('/delete', function(){
	// $post = Post::find(1);
	// $post->delete();
	// Post::destroy(1);
	// Post::destroy([4,5]);
	// Post::where('is_admin', 0)->delete();

});

Route::get('/softdelete', function(){
 	
 	//Post::find(2)->delete();

 	#or a read soft delete

 	//$post = Post::onlyTrashed()->where('id', 1)->get();

 	return $post;
});

Route::get('/restore', function(){
	//Post::withTrashed()->where('is_admin', 0)->restore();
});


Route::get('/forcedelete', function(){
	//Post::withTrashed()->where('is_admin', 0)->forceDelete();
});






/*
|---------------------------------------------
	ELOQUENT relationships
|---------------------------------------------
*/

	Route::get('/user/post/{id}', function($id){
		return User::find($id)->post;
	});
	


	// Route::get('/scoreboard', function(){
	// 	return view('scoreboard');
	// });




/*
|---------------------------------------------
	Specian projects
|---------------------------------------------
*/


	Route::get('/tim', function(){
		return view('tim');
	});


	Route::get('/scoreboard', 'ScoreboardController@retrieve_scores');

	Route::get('/createpagecounter', 'PagesController@create_page_counter');


	// Route::get('/form', function(){
	// 	return view('form');
	// });


	Route::get('/form', 'PagesController@load_form_page');



	/*
		CRUD application


	*/

	Route::get('/posts', 'PostController@store')