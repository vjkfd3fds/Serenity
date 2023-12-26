<?php 
	include_once '../php/connect.php';

	function rand_string_generator() {
		$alph = 'abcdefghijlmnopqrstuvwxyz1234567890!@#$%^&*()_-+=';
		$rand_string = '';
		for ($i=0; $i<10; $i++) {
			$rand_string .= $alph[rand(0, strlen($alph))];
		}
		return $rand_string;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="generate_account.php">
		<input type="submit" name="generate" value="Create Account" />
	</form>
</body>
</html>