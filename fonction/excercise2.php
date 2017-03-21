<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction1</title>
</head>
<body>
	<?php 
		function vrais($string1, $string2 = "c'est pas vrais"){
			return $string1.$string2;
		}

		print vrais("coucou ");
	 ?>
</body>
</html>