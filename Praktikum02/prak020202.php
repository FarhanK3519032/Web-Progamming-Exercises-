<!DOCTYPE html>
<html>
	<head>
		<title>Create Table</title>
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
					echo "<td>No Urut $sequence</td>";
					$sequence++;
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>