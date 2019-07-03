<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $dates = ['deleted_at'];


	
	protected $fillable = [
		'score_val',
		'playerID'
	];
	
    //
}
