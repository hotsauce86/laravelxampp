<!DOCTYPE html>
<html>
<head>
	<title>Scoreboard</title>
</head>
<body>

	<h1>Scoreboards with a MySQL Database</h1>


	<form>
		<input type="number" name="playerID" placeholder="PlayerID">
		<input type="number" name="scoreValue" placeholder="Score">
		<input type="submit" name="search1" value="add score">
	</form>



	<table>
		<thead>
			<tr>
				<th>PLayer_ID</th>
				<th>Score_Value</th>
			</tr>
		</thead>
		<tbody id="scorebaordbody">
			<tr></tr>
		</tbody>
	</table>

	<!--?php


	/*
	most of what is in here now can only be described as code cobbled together with hotglue and staples. Most of what this connection is based off of is from my movie database project, and trying to find a way to rework it for this laravel project. take everything you see here with a grain of salt as this is not the final version

	*/


	if ($conn->connect_error) {
   	die("Connection failed: " . $conn->connect_error);
   	echo "Connection failed:";
	} else{
	//We CONCAT the actors name for readability
	$sql = "SELECT scoreVal, playerID
			FROM scoreboard
      ";
	$result = $conn->query($sql);
	    // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td> ". $row["scoreVal"]. "</td><td> ". $row["playerID"]. "</td>";
      }


}

	?-->

</body>
</html>