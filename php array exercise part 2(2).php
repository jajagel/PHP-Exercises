<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2(2)</title>
</head>
<h4>Array Exercise Part 2 - Exercise 2</h4>
<body>
	<?php 
		$file = file_get_contents("file.txt");
		$num = explode(",", $file);
		$y = 0;

		$numArr=array_count_values($num);

		echo "The frequency of all elements of an array : <br>";

			foreach($numArr as $x => $value) {
  				echo "$x occurs $value times <br>";
		}

	?>
</body>
</html>