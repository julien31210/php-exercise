<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl</title>
</head>
<body>
	<?php 
		if ($_GET["langage"] && $_GET["serveur"]) {
			echo "C'est cool de manger du ". $_GET["langage"]." servi par ". $_GET["serveur"];
		}
		else{
			echo "j'entend rien et je ne sait pas qui c'est ce LAMP";
		}
	 ?>
</body>
</html>