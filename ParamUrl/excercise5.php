<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["batiment"] && $_GET["salle"]) {
			echo "Dans le batiment ". $_GET["batiment"]." c'est apprentissage d'essorage de chaussettes salle ". $_GET["salle"].".";
		}
		else{
			echo "Dans le batiment 12, allez à la salle 101 c'est cours de torture :D";
		}
	 ?>
</body>
</html>