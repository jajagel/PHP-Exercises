<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2(3)</title>
</head>
<h4>Array Exercise Part 2 - Exercise 3</h4>
<body>
	<?php 
		$file = file_get_contents("file.txt");
		$num = explode(",", $file);
		
		$even = array();
		$odd = array();

		for($i=0;$i<count($num);$i++){
			if($num[$i]%2==0){
				$even[$i]=$num[$i];
			}else{
				$odd[$i]=$num[$i];
			}
		}

		echo "The Even elements are : <br>";
		foreach ($even as $x)
			echo "$x ";
		echo "<br>";

		echo "The Odd elements are : <br>";
		foreach ($odd as $x)
			echo "$x ";
		echo "<br>";


	?>
</body>
</html>