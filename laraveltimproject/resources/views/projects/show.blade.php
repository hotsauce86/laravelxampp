@extends('layout')

@section('content')

	<h1 class="title">
		Projects
	</h1>

	<div class="content">
		<h1> {{ $project->title }}</h1>

	<p>
		{{ $project->description }}
	</p>


	</div>


	<p>
		<a href="/projects/{{ $project->id }}/edit">edit project</a>
	</p>
	


@endsection