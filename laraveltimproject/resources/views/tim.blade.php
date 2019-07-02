<!DOCTYPE html>
<?php
	
	if(isset($_POST['submit'])){
		echo "data has been submitted";


		$username = $_POST['username'];
		$password = $_POST['password'];
	}


 ?>
<html>
<head>
	<title>Tim</title>
</head>
<body>

	<style>
		article{
			background-color: lightgrey;
			border-style: solid;
			border-color: black 1px;
		}
	</style>
	<p>Hello, if youy are seeing this page on Git, I'll just let you know that this place is just a scratchpad for me to practice some PHP stuff.</p>


	<?php


	if( 5 < 7){
		echo "we got an echo wow <br> <br>";
	}


	$number = 43;

	switch ($number) {
		case '41':
			echo "wow sublime auto did this ";
			break;
		case '42':
			echo "42";
			break;
		case '43':
			echo "wow sublime auto did this";
			break;
		
		default:
			echo "neat thanks sublime";
			break;
	}

	$whilecount =0;
	while($whilecount < 3){
		echo "<br>";
		echo $whilecount;
		$whilecount++;
	}

	for($forcount =3; $forcount > 0 ; $forcount--){
		echo "<br>";
		echo $forcount;
	}
	echo "<br><br>";
	$foreachcount = array(123,2344,435,6456,76678,2345);
	foreach($foreachcount as $fec){
		echo "hello, " . $fec . "<br>";
	}
	?>





	<?php

	
		function somefunction($sc){
			// while($sc < 4){
			echo "testing function, typing on this keyboard is hard: " . $sc ."<br><br>";	
				
			// }
			
		}

		somefunction(1);

		$count =0;

		function testrecurstion($count){
			echo($count);
			while($count < 7){
				//echo($count);
				$count++;
				return testrecurstion($count);
			}
			echo($count);
			return $count;
		}


		testrecurstion($count);



		function mathStuff(){

			echo rand(1, 1000) . "<br>";

			echo pow(2,5) . "<br>";

			echo sqrt(100) . "<br>";

		}
		mathStuff();

		function stringStuff(){
			$somestring = "hello im a lorem ipsum thing";

			echo strlen($somestring) .  "<br>";
			echo strtoupper($somestring) .  "<br>";
			echo strtolower($somestring) .  "<br>";
		}
		stringStuff();


		function arrayStuff(){

			$num = 56;
			$list = [123,342,56,123,78,45,345,67,34,56];

			echo max($list) . "<br>";
			echo min($list) . "<br>";

			$find = in_array($num, $list);

			if($find){
				echo "found";
			}else{
				echo "not found";
			}

		}
		arrayStuff();
	?>


	<article>
		<p>In the following section we will have a form</p>
	</article>


	<form action="tim.blade.php" method="post">
		<input type="text" placeholder="Enter Username">
		<input type="text" placeholder="Enter Password">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>