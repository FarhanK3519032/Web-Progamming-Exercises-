<!DOCTYPE html>
<html>
	<head>
		<title>Create Table</title>
		<style>
			.angkagenap {background:white; color:red}
			.angkaganjil {background:red; color:white}
		</style>
	</head>
	<body>
		<?php
			$baris = 4;
			$kolom = 5;
			$sequence = 1;
			echo "<table border='1'>";
			for ($i=0; $i<$baris; $i++) { 
				echo "<tr>";
				for ($j=0; $j<$kolom ; $j++) { 
					if ($sequence % 2==0) {
						echo "<td class='angkagenap'>" .$sequence. "</td>" ;
					}else{
						echo "<td class='angkaganjil'>" .$sequence. "</td>";
					}
					$sequence++;
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>