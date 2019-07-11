<!DOCTYPE html>
<html>
<head>
	<title>Caculator</title>
</head>
<body>

<form>
	
	  <input type="text" name="num 1" placeholder="Number 1">
	  <input type="text" name="num 2" placeholder="Number 2">

	  <select>
	  	<option>None</option>
	  	<option>Add</option>
	  	<option>Subtract</option>
	  	<option>Multiply</option>
	  	<option>Divide</option>
	  </select>
	  <br>
	  <button type="submit" name="submit" value="submit">Calculator</button>
</form>
<p>The answer is:</p>

<?php 
	if (isset($_GET['submit'])) {

		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator']

		switch ($operator) {
			case 'None':
			echo You need to select a Method!;
				break;
				case 'Add':
			echo result1 + result2;
				break;
				case 'Subtract':
			echo result1 - result2;
				break;
				case 'Multiply':
			echo result1 * result2;
				break;
				case 'Divide':
			echo result1 / result2;
				break;
			
			
		}
	}
 ?>

</body>
</html>