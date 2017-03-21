<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction1</title>
</head>
<body>
	<?php 
		function calcul($nb1 = 5, $nb2 = 5, $nb3 = 5){
			return $nb1 + $nb2 + $nb3;
		}
		print calcul(10, 100, 1000);
	 ?>
</body>
</html>