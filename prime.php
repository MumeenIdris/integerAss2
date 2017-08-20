<!DOCTYPE html>
<html>
<head>
	<title>Check for prime numbers</title>
</head>
<body>
	<form method="get" action="">
		<input type="text" name="number" height="10px">
		<input type="submit" name="prime" value="Prime">
	</form>

	<?php 

		function is_prime($i){
			$n = 2;
			while ($n < $i) {
				if($i % $n == 0){
					return $i . " is not a prime number";
				}elseif($i % $n != 0){
					return $i . " is a prime number";
				}
			}
		}
		if(isset($_GET['prime'])){
			echo (is_prime($_GET['number']));
		}

	?>
</body>
</html>