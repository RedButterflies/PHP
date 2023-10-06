<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		 <title>Galeria zdjec</title>
	</head>
	<body style="background-color: #5386b5">
		<?php
			$nazwa='obraz1';
			print("<img style='display:flex;justify-content:center;margin: 0 auto;max-width:100%;height:auto' src='zdjecia/zdjecia/$nazwa.JPG' alt='$nazwa' />" );
			$miniatury1 = array(
				"zdjecia/miniaturki/obraz1.jpg",
				"zdjecia/miniaturki/obraz2.jpg",
				"zdjecia/miniaturki/obraz3.jpg",
				"zdjecia/miniaturki/obraz4.jpg"
				
			);
			$miniatury2 = array(
				
				"zdjecia/miniaturki/obraz5.jpg",
				"zdjecia/miniaturki/obraz6.jpg",
				"zdjecia/miniaturki/obraz7.jpg",
				"zdjecia/miniaturki/obraz8.jpg"
				
			);
			
			echo "<header style='text-align:center;font-size: 36px' >Galeria zdjęć foreach</header>";
			echo "<table style='display:flex;justify-content:center;height:100vh;'>";
			echo "<tr>";

			foreach ($miniatury1 as $miniatura1) {
				
				echo "<td><img src='$miniatura1' alt='Miniatura'></td>";
				
				
			}
			echo "</tr>";
			echo "<tr>";
			foreach ($miniatury2 as $miniatura2) {
				
				echo "<td><img src='$miniatura2' alt='Miniatura'></td>";
				
				
			}
			echo "</tr>";
			echo "</table>";
			echo "<header style='text-align:center;font-size: 36px' >Galeria zdjęć pętla for</header>";
			echo "<table style='display:flex;justify-content:center;height:100vh;'>";
			echo "<tr>";
		
			
			for ($i=0;$i<8;$i++)
			{
				$nazwa1='obraz'.$i+1;
				print("<td><img src='zdjecia/miniaturki/$nazwa1.JPG' alt='$nazwa1' /></td>");
				if ($i==3 ){
				echo "</tr><tr>";}
				
			}
			echo "</tr>";
		
			echo "</table>";
			echo "<header style='text-align:center;font-size: 36px' >Galeria zdjęć z funkcji</header>";
			function galeria($rows, $cols) {
				$a=1;
				echo "<table style='display:flex;justify-content:center;height:100vh;'>";
				for ($i = 0; $i < $rows; $i++) {
					echo '<tr>';
					
					for ($j = 0; $j < $cols; $j++) {
						
						$nazwa3 ='obraz'.$a;
						$a+=1;
						echo "<td><img src='zdjecia/miniaturki/$nazwa3.jpg' alt='$nazwa3'></td>";
						
					}
					echo '</tr>';
				}
				echo '</table>';
			}
			galeria(3,3);
		
			 

		?>
	
	
	</body>
</html>