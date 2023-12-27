<?php 
	include_once '../php/connect.php';

	function rand_password_generator() {
		$alph = 'abcdefghijlmnopqrstuvwxyz1234567890!@#$%^&*()_-+=';
		$rand_string = '';
		for ($i=0; $i<10; $i++) {
			$rand_string .= $alph[rand(0, strlen($alph))];
		}
		return $rand_string;
	}
	
	$username = md5(rand_password_generator());
	$password = md5(rand_password_generator());
	if (isset($_POST['generate'])) {
		$sql = "INSERT INTO doctor_login (username, password) VALUES ('$username', '$password')";
		$result = $conn->query($sql);
		if ($result === TRUE) {
			echo '<script>alert("succesfully generated the account");</script>';
			echo '<script>window.location.href="generate_account.php";</script>';
			exit;
		} else {
			echo 'Something went wrong ' . $conn->error;
			exit;
		}

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

<?php 
	
	$sql = "SELECT * FROM doctor_login";
	$result = $conn->query($sql);

	while ($row = $result->fetch_assoc()) {
		echo 'Username: ' . $row['username'];
		echo '<br />';
		echo 'Password ' . $row['password'];
		echo '<br />';
	} 


?>