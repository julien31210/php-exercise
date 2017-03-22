<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["nom"] && $_GET["prenom"]) {
			echo $_GET["nom"]." ". $_GET["prenom"];
		}
		else{
			echo "merde";
		}
	 ?>
</body>
</html>