<?php 
	include_once 'config.php';

	if (isset($_POST['register'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$sql = "INSERT INTO doctor_login (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
		$stmt = $conn->prepare($sql);

		if (!$stmt) {
			echo "Something went wrong" . $stmt->error;
		}
		$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
		$var = $stmt->execute();
		
		if ($var === TRUE) {
			echo '<script>alert("Successfully created your account"); window.location.href="../doctors/login.php"</script>';
		} else {

		}

		$conn->close();
		$stmt->close();
	} else 

?>