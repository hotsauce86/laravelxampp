<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p>
		this is the create page
	</p>

	<form method="POST" action="/projects">
		
		{{csrf_field()}}
		<div>
			<input type="text" name="title" placeholder=" project title">
		</div>


		<div>
			<textarea name="description" placeholder="project description">
				
			</textarea>
		</div>


		<div>
			<button type="submit">create project</button>
		</div>
	</form>

</body>
</html>