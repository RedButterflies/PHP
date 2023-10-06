<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		 <title>My first php script</title>
	</head>
	<body>
	
		<?php
			echo "<h2> Pierwszy skrypt PHP</h2>";
			$n=4567;
			$x=10.123456789;
			$line1= "Domyślny format : n=".$n.", x=".$x;
			$line2= "Domyślny format : n=$n, x=$x";
			$line3= 'Domyślny format : n=$n, x=$x';
			echo $line1;
			echo "<br>";echo "<br>";
			echo $line2;
			echo "<br>";echo "<br>";
			echo $line3;
			echo"<br>";echo"<br>";
			printf("Domyślny format: n=%d, x=%f <br>Zaokrąglenie do liczby całkowitej x=%d, <br>z trzema cyframi po kropce x=%.3f ",$n,$x,$x,$x);
			
			
		?>
	
	
	</body>
</html>
