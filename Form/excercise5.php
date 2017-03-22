<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
<form action="user.php" method="post">
<select name="civ">
	<option value="monsieur">monsieur</option>
	<option value="madame">madame</option>
</select>
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prenom : <input type="text" name="prenom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
	<?php 
		echo $_POST["civ"]." ". $_POST["nom"]." ".$_POST["prenom"];
	 ?>
</body>
</html>