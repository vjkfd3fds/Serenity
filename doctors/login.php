<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for the login page -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
    }
  </style>
</head>
<body>

<div class="container login-container">
  <h2 class="text-center mb-4">Login</h2>
  <form id="loginForm" method="POST" action="../php/doctor_login.php">
    <div class="form-group">
      <label for="inputEmail">Email address</label>
      <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
  </form>
</div>
<script>
  function login() {
    continue;
  }
</script>

</body>
</html>
