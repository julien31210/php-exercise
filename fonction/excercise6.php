<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction1</title>
</head>
<body>
	<?php 
		function civile($nom, $prenom, $age){
			return "Bonjour".$prenom.$nom." tu a ".$age." ans.";
		};
		print civile(" Julien ", " Linder ", 21);
	 ?>
</body>
</html>