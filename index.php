<!DOCTYPE html>
<html>
<head>
	<title>PHP Loop</title>
</head>
<body>
	<form method="POST">
		<input type="number" name="inputNumber">
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php 
require_once('loop.php'); 
$loop = new Loop;

if (isset($_POST['inputNumber'])){
	$number = intval($_POST['inputNumber']);
	$loop->print_number($number);
}

 ?>