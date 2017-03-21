<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction1</title>
</head>
<body>
	<?php 
		function nombre($nb1, $nb2){
			if ($nb1 > $nb2) {
				return "C'est trop grand";
			}

			else if($nb1<$nb2){
				return "C'est plus petit";
			}

			else {
				return "C'est identique";
			}
		}
		print nombre(20, 20);
	 ?>
</body>
</html>