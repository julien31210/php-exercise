<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["dateDebut"] && $_GET["dateFin"]) {
			echo "La fin du monde commencera le ". $_GET["dateDebut"]." et finira le ". $_GET["dateFin"];
		}
		else{
			echo "La fin du monde à changé de sens :P";
		}
	 ?>
</body>
</html>