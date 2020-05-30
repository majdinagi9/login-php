<?php
/*
File: collecting_info.php
Name: Majdi Nagi
Email: majdi.nagi@stu.bmcc.cuny.edu
Created: March 28, 2020
*/
?>

<!DOCTYPE html>
<html>
<head>
  <title>TAX</title>
  <link rel="stylesheet" type="text/css" href="tax_calculation.css">
</head>
<body>
<h1>Tax Calculation</h1>
<form action="tax_calulation.php" method="post">
	<label>Are you: </label>
<input type="radio" name="status" value="single" required>
	<label>Single</label>
<input type="radio" name="status" value="married" required>
	<label>Married</label>
<br><br>

	<label>Enter Your Income: $</label>
	
<input type="number" name="income" required>
<br><br>
<input type="submit" name="submit">
</form>
</body>
</html>

