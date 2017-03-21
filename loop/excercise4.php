<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>loop4</title>
</head>
<body>
	<?php
		echo "Hello World!"."<br>";
		$num1;
		for ($num1=1; $num1 <=10 ; $num1++) { 
			echo $num1."<br>";
			$num1 = $num1*1.5;
		}
	 ?>
</body>
</html>