<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		 <title>Types of variables in php</title>
	</head>
	<body>
	
		<?php
		echo"Zmienne: <br>";
			$a=1234;
			$b=567.789;
			$c=1;
			$d=0;
			$e=true;
			$f="Typy w PHP";
			$g=[1,2,3,4];
			$h=["zielony","czerwony","niebieski"];
			$i=["Agata","Agatowska",4.67,true];
			$j=new DateTime();
			echo"a=$a<br>b=$b<br>c=$c<br>d=$d<br>e=".($e?"true":"false")."<br>f=$f <br> g=[".implode(",",$g)."] (Liczba elementów: ".count ($g).")<br> h=[".implode(",",$h)."] (Liczba elementów: ".count ($h).") <br> i=[".implode(', ', array_map(function($item) {
			if (is_bool($item)) {
				return $item ? 'true' : 'false';
			} else {
				return $item;
			}
		}, $i))."] (Liczba elementów: ".count ($i).")<br>j=".$j->format('Y-m-d H:i:s')."<br>";
		
		
		
		echo "<br><br><br>Sprawdzenie działania funkcji na zmiennych<br>";
		echo "is_bool(\$a): " . (is_bool($a) ? "true" : "false") . "<br>";
		echo "is_int(\$b): " . (is_int($b) ? "true" : "false") . "<br>";
		echo "is_numeric(\$c): " . (is_numeric($c) ? "true" : "false") . "<br>";
		echo "is_numeric(\$d): " . (is_numeric($d) ? "true" : "false") . "<br>";
		echo "is_bool(\$e): " . (is_bool($e) ? "true" : "false") . "<br>";
		echo "is_string(\$f): " . (is_string($f) ? "true" : "false") . "<br>";
		echo "is_array(\$g): " . (is_array($g) ? "true" : "false") . "<br>";
		echo "is_array(\$h): " . (is_array($h) ? "true" : "false") . "<br>";
		echo "is_array(\$i): " . (is_array($i) ? "true" : "false") . "<br>";
		echo "is_object(\$j): " . (is_object($j) ? "true" : "false") . "<br>";
		
		echo"<br><br><br>Porownanie 1 i 'true' :<br>";
		echo "1==true: ".((1==true)?'rowne':'nie rowne').'<br>';
		echo "1===true: ".((1===true)?'rowne':'nie rowne').'<br><br><br>';
		
		echo'<br><br><br>Porownanie 0 i "0" :<br>';
		echo '0=="0": '.((0=="0")?'rowne':'nie rowne').'<br>';
		echo '0==="0": '.((0==="0")?'rowne':'nie rowne').'<br><br><br>';
		
		echo "var_dump():<br>";
		echo var_dump($g)."<br>";
		echo var_dump($h)."<br>";
		echo var_dump($i)."<br>";
		
		echo "<br><br><br> print_r(): <br>";
		echo print_r($g)."<br>";
		echo print_r($h)."<br>";
		echo print_r($i)."<br>";
		
		?>
	
	
	</body>
</html>
