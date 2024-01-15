<?php 
	include_once 'config.php';

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM doctor_login WHERE username = ? AND password = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $email, $password);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();

		if ($result->num_rows == 1) {
			echo "<script>alert('Successfully logged in '); document.location.href='doctor_login.php';</script>";
			exit;
		} else {
			echo "<script>alert('wrong credentials please try again'); document.location.href='doctor_login.php'</script>";
			exit;
		}

		$conn->close();
		$stmt->close();
	}

?>