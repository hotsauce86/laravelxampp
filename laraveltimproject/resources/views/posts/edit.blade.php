@extends('layouts.test')




@section('content')


<h2>Edit Post</h2>

<form method="post" action="/posts/{{$post->id}}">

	{{csrf_field()}}
	<input type="hidden" name="_method" value="PUT">

	<input type="text" name="title" placeholder="enter something" value="{{$post->title}}">

	<input type="submit" name="submit">

</form>
@stop