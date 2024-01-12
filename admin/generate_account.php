<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
</head>
<body>
	<div class="container mt-5">
		<form method="POST" action="generate_account.php">
			<input type="submit" name="generate" value="Create Account" />
		</form>
		<h2 class="mt-4">Generated Accounts</h2>

<?php 
	error_reporting(0);

	include_once '../php/config.php';

	function rand_password_generator() {
		$alph = 'abcdefghijlmnopqrstuvwxyz1234567890!@#$%^&*()_-+=';
		$rand_string = '';
		for ($i=1; $i<5; $i++) {
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

	
	$sql = "SELECT * FROM doctor_login";
	$result = $conn->query($sql);
	echo '<table class="table table-bordered mt-3">';
	echo '<thead class="thead-dark">';
	echo '<tr>';
	echo '<th scope="col">Username</th>';
	echo '<th scope="col">Password</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo '<td>' . $row['username'] . '</td>';
			echo '<td>' . $row['password'] . '</td>';
			echo '</tr>';
		}
		echo '</tbody>';
        echo '</table>'; 
	} else {
		echo "NO data found";
	}
?>
</div>
</body>
</html>