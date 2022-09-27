<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise 2</title>
</head>
<body>
	<h2>Largest Cities</h2>
	<?php
		$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

		foreach($cities as $city){
			print "$city, ";
		}

		sort($cities);

		echo "<div><ul>";
		foreach($cities as $city){
			echo "<li>".$city."</li>";
		}
		echo "</ul></div>";

		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		sort($cities);

		echo "<div><ul>";
		foreach($cities as $city){
			echo "<li>".$city."</li>";
		}
		echo "<ul></div>";
	?>
</body>
</html>