<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p>
		this is the index page
	</p>


	@foreach($projects as $project)

	<li>{{$project->title}}</li>
	@endforeach

</body>
</html>