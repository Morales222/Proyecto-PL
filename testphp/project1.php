<!DOCTYPE html>
<html>
<head>
 <title>Simple PHP Calculator</title>
</head>
<body>
<form method="post" action="project1.php">
	number1: 
	<input type="text" name="num1" required>
	<input type="submit" value="Submit">

	<label for="operator">Operator:</label>
	<select name="operator" id required>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>

	number:2
	<input type="text" name="num2" required>
	<input type="submit" value="Submit">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$operator =$_POST["operator"];

	switch ($operator) {
	case "+":
		$result = $num1 + $num2;
		echo "num1: {$num1}";
		echo "num2: {$num2}";
		echo "Result: {$result}";
		break;
	case "-":
		$result = $num1 - $num2;
		echo "Result: {$result}";
		break;
	case "*":
		$result = $num1 * $num2;
		echo "Result: {$result}";
		break;
	case "/":
		if ($num2 != 0){
			$result = $num1 / $num2;
			echo "Result: {$result}";
		}else{
			echo "Cannot divide by zero.";
		}
		break;
	default:
		echo "Invalid operator.";
		break;
	}
}
	


?>
</body>
</html>
