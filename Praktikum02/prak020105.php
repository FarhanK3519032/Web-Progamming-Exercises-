<!DOCTYPE html>
<html>
	<head>
		Headings
		<style>.fontcolor {color:red;}</style>
	</head>
	<body>
		<?php
			$i = 1;
			do {
				if ($i % 2==0) {
					echo "<h$i class='fontcolor'> Heading $i </h$i>";
				}else{
					echo "<h$i> Heading $i </h$i>";
				}
				$i++;
			} while ($i <= 6);
		?>
	</body>
</html>