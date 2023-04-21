<!DOCTYPE html>
<html>
<head>
	<title>Advanced Calculator</title>
</head>
<body>
	<h1>Advanced Calculator</h1>
	<form method="post">
		<label for="num1">Number 1:</label>
		<input type="text" name="num1"><br><br>

		<label for="num2">Number 2:</label>
		<input type="text" name="num2"><br><br>

		<label for="operator">Operator:</label>
		<select name="operator">
			<option value="add">+</option>
			<option value="subtract">-</option>
			<option value="multiply">*</option>
			<option value="divide">/</option>
			<option value="power">^</option>
			<option value="sqrt">sqrt</option>
			<option value="sin">sin</option>
			<option value="cos">cos</option>
			<option value="tan">tan</option>
		</select><br><br>

		<input type="submit" name="submit" value="Calculate">
	</form>
	
	<?php 
		if(isset($_POST['submit'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "add":
					$result = $num1 + $num2;
					break;
				case "subtract":
					$result = $num1 - $num2;
					break;
				case "multiply":
					$result = $num1 * $num2;
					break;
				case "divide":
					$result = $num1 / $num2;
					break;
				case "power":
					$result = pow($num1, $num2);
					break;
				case "sqrt":
					$result = sqrt($num1);
					break;
				case "sin":
					$result = sin($num1);
					break;
				case "cos":
					$result = cos($num1);
					break;
				case "tan":
					$result = tan($num1);
					break;
				default:
					$result = "";
			}

			echo "<p>Result: " . $result . "</p>";
		}
	?>
</body>
</html>
