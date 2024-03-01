<?php 
	include_once 'config.php';

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM doctor_login WHERE email = ? AND password = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ss", $email, $password);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();

		if ($result->num_rows == 1) {
			$sql = "SELECT * FROM doctor_login WHERE email = '$email' AND password = '$password'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$did = $row['did'];
			setcookie("did", $did, time() + 3600, "/");
			echo "<script>alert('Successfully logged in '); document.location.href='../doctors/requests.php';</script>";
		} else {
			echo "<script>alert('wrong credentials please try again'); document.location.href='../doctors/doctor_login.php'</script>";
		}

		$conn->close();
		$stmt->close();
	}

?>