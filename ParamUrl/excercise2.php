<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["nom"] && $_GET["prenom"] && $_GET["age"]) {
			echo $_GET["nom"]." ". $_GET["prenom"]." ". $_GET["age"];
		}
		else{
			echo "age n'exsiste pas";
		}
	 ?>
</body>
</html>