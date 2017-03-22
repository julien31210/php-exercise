<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["semaine"]) {
			echo "La semaine ". $_GET["semaine"]." c'est pour partir à l'aventure.";
		}
		else{
			echo "La semaine 12 à été inventée par les illuminatis";
		}
	 ?>
</body>
</html>