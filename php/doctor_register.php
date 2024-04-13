<?php 
	include_once 'config.php';

	if (isset($_POST['register'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		// Use prepared statement to prevent SQL injection
		$sql_check = "SELECT * FROM doctor_login WHERE email = ? AND password = ?";
		$stmt_check = $conn->prepare($sql_check);
		$stmt_check->bind_param("ss", $email, $password);
		$stmt_check->execute();
		$result_check = $stmt_check->get_result();

		if ($result_check->num_rows > 0) {
			echo '<script>alert("This email exists. Please use another email."); window.location.href="../doctors/register.php";</script>';
		} else {
			// Insert new user
			$sql_insert = "INSERT INTO doctor_login (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
			$stmt_insert = $conn->prepare($sql_insert);
			if (!$stmt_insert) {
				echo "Something went wrong: " . $conn->error;
			} else {
				$stmt_insert->bind_param("ssss", $firstname, $lastname, $email, $password);
				if ($stmt_insert->execute()) {
					echo '<script>alert("Successfully created your account"); window.location.href="../doctors/login.php"</script>';
				} else {
					echo "Error: " . $stmt_insert->error;
				}
				$stmt_insert->close();
			}
		}
		$stmt_check->close();
		$conn->close();
	}
?>
