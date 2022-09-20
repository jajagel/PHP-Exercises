<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercise 7</title>
</head>
<body>
	<table cellpadding="8" cellspacing="0">
		<?php
			for($j=1;$j<=7;$j++){
				echo "<tr>";
				for($k=1;$k<=7;$k++){
					echo "<td>". $k*$j."</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>