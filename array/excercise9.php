<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array</title>
</head>
<body>
	<?php 
		$hautDeFrance= array("59" =>"Nord", "62" =>"Pas de calais", "80" =>"Somme", "60" =>"Oise", "02" =>"Aisne");
		foreach ($hautDeFrance as $hdf) {
			echo $hdf." ";
		}
	 ?>
</body>
</html>