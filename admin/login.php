<?php 
	include ('../php/config.php');


	$sql = "SELECT * FROM administration";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$name = $row['username'];

	if (isset ($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($row['password'] == $password && $row['username'] == $username) {
			echo '<script>alert("Successfully logged in"); window.location.href="admin-dashboard.php"; </script>';
			setcookie ("username", $name, time() + (86400 * 30), "/");
			exit;
		} else {
			echo '<script>alert("Wrong credentials"); window.location.href="login.php"; </script>';
			exit;
		}
	}

	$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Serenity | Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../user/styles/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="username" id="email" class="form-control" placeholder="email@example.com">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="../user/images/login1.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
</body>
</html>
