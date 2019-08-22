@extends('layout')

@section('content')

	<h1 class="title">
		Projects
	</h1>

	<div class="content">
		<h1>{{ $project->title }}</h1>

		<p>{{ $project->description }}</p>

		<p>ID: {{ $project->id }}</p>










		@if ($project->tasks->count())
			<div>
				@foreach ($project->tasks as $task)
					<div>
						<form method="POST" action="/tasks/{{ $task->id }}">
								{{method_field('PATCH')}}
								{{ csrf_field() }}
							<label class="checkbox" for="completed">
								<input type="checkbox" name="completed" onChange="this.form.submit()" checked>
								{{ $task->description }}
							</label>
						</form>
						
					</div>

				@endforeach
			</div>
		@endif


	</div>








	<form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
	
		{{ csrf_field() }}
		 <div class="field">
		 	<label class="label" for="description">
		 		New Task
		 	</label>

		 	<div class="control">
		 		<input type="text" class="input" name="description" placeholder="New Task">
		 	</div>
		 </div>

		 <div class="field">
		 	<div class="control">
		 		<button type="submit" class="button is-link"> Add Task</button>
		 	</div>
		 	
		 </div>

	</form>

	<p><a href="/projects/{{ $project->id }}/edit">edit project</a></p>
	


@endsection