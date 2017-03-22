<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
<form action="user.php" method="GET">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prenom : <input type="text" name="prenom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
	<?php 
		echo $_GET["nom"]." ".$_GET["prenom"];
	 ?>
</body>
</html>