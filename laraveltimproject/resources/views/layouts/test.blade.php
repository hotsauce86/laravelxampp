<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<title>@yield('title')</title>

	<!--  im a  comment in the test layout page -->
</head>
<body>


	<div class="container">
		<p>hello</p>
		@yield('content')
	</div>

	@yield('footer')
</body>
</html>