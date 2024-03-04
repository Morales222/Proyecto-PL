<!DOCTYPE html>
<html>
<head>
	<title>Prime Number Identifier</title>
</head>
<body>

<form method="post" action="project2.php" required>
	<label for="number">Ingrese un numero:</label>
	<input type="number" name="number" required>
	<input type="submit" value="Verificar">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$number = $_POST["number"];

	if($number > 1 && is_numeric($number)){
		$isPrime = true;

		for($i = 2; $i <= sqrt($number); $i++){
			if($number % $i == 0){
				$isPrime = false;
				break;
			}
		}

		if($isPrime){
			echo "$number es numero primo.";
		}else {
			echo "$number no es numero primo.";
		}
	}else {
		echo "Por favor ingresar un numero valido, mayor que 1.";
	}
}
?>
</body>
</html>

