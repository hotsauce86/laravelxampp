@extends('layouts.test')



@section('content')

<h1 class="title">edit project</h1>

<form method="POST" action="/projects/{{ $project->id }}">

	{{method_field('PATCH')}}

	{{ csrf_field() }}
	<div class="field">
		<label class="label" for="title">TItle</label>

		<div class="control">
			<input type="text" class="input "name="title" placeholder="title" value="{{ $project->title }}">
		</div>
	</div>


	<div class="field">
		<label class="label" for="description">Description</label>

		<div class="control">
			<textarea name="description" class="textarea">{{ $project->description }}</textarea>
		</div>
	</div>


	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">update project</button>
		</div>
	</div>

</form>


<form method="POST" action="/projects/{{ $project->id }}">
	{{ method_field('DELETE')}}
	{{ csrf_field() }}

	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">delete project</button>
		</div>
	</div>


</form>

@stop