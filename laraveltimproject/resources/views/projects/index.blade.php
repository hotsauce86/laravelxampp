<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p>
		this is the index page
	</p>

	<ul>
	@foreach($projects as $project)

	<a href="/projects/{{ $project->id }}">
		<li>{{$project->title}}</li>
	</a>
	
	@endforeach
</ul>
</body>
</html>