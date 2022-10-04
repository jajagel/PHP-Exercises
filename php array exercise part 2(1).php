<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2(1)</title>
</head>
<h4>Array Exercise Part 2 - Exercise 1</h4>
<body>
	<?php 
		$file = file_get_contents("file.txt");
		$num = explode(",", $file);
		$y = 0;

		$numArr=array_count_values($num);

			foreach($numArr as $x => $value) {
  				if($value > 1){
  					$y++;
  				}
		}

		echo "Total number of duplicate elements found in the array is : $y";  
	?>
</body>
</html>