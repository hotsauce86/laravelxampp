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

	<p>
		ID: {{ $project->id }}
	</p>

	@if ($project->tasks->count())
	<div>
		@foreach ($project->tasks as $task)
			<div>
				<form method="POST" action="/tasks/{{ $task->id }}">
						{{method_field('PATCH')}}
						{{ csrf_field() }}
					<label class="checkbox" for="completed">
						<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
						{{ $task->description }}
					</label>
				</form>
				
			<div>

		@endforeach
	</div>
	@endif

	</div>


	<p>
		<a href="/projects/{{ $project->id }}/edit">edit project</a>
	</p>
	


@endsection