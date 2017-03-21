<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction1</title>
</head>
<body>
	<?php 
		function civile($age, $genre){
			if ($age >= 18){
				$major = "majeur(e).";
			}
			else{
				$major = "majeur(e).";
			}

			if ($genre == "homme") {
				$civ = "Vous êtes un homme ";
			}
			elseif ($genre == "femme") {
				$civ = "Vous êtes une femme ";
			}
			return $civ.$major;
		};

		print civile(10000, "femme");
	 ?>
</body>
</html>