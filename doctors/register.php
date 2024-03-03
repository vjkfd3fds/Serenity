<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .registration-form {
      width: 360px;
      margin: 50px auto;
    }
    .registration-form form {
      margin-bottom: 15px;
      background: #f7f7f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }
    .registration-form h2 {
      margin: 0 0 15px;
    }
    .form-control, .btn {
      min-height: 38px;
      border-radius: 2px;
    }
    .btn {        
      font-size: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="registration-form">
    <form action="../php/doctor_register.php" method="post">
        <h2 class="text-center">Register</h2>       
        <div class="form-group">
            <input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" required="required">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
        </div>        
    </form>
    <p class="text-center"><a href="login.php">Already have an account? Log in</a></p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
