<?php 
	include_once '../php/config.php';
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    if (isset($_COOKIE['uid'])) {
	        $uid = $_COOKIE['uid'];

	        if (isset($_POST['did']) && isset($_POST['name'])) {
	            $did = $_POST['did'];
	            $fullname = $_POST['name'];

	            $sql = "INSERT INTO subscriptions (did, uid, doctorname, subscribed) VALUES ('$did', '$uid', '$fullname', 1)";
	            if ($conn->query($sql) === TRUE) {
	                echo '<script>alert("You successfully subscribed to ' . $fullname .'"); window.location.href="subscribed/home.php"; </script>';
	                exit;
	            } else {
	                echo 'Something went wrong ' . $conn->error;
	            }
	        } else {
	            echo 'Error: Missing form data';
	        }
	    } else {
	        echo 'Error: User ID not set';
	    }
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serenity | Hiring Board</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <style>
    body {
      margin: 0px;
      padding: 20px;
      background-image: url(background2.jpg);
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif;
    }

    .card {
      background-color: rgb(255, 255, 255);
      box-shadow: 0 4px 8px #0727dece;
      border-radius: 20px;
      padding: 40px;
      max-width: 350px;
      text-align: center;
      animation: slideIn 1s ease-out;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    @keyframes slideIn {
      from { transform: translateY(-100px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <?php 
    include_once '../php/config.php';

    $sql = "SELECT * FROM doctor_details WHERE status = 'verified'";
    $result = $conn->query($sql);

    // Check if there are rows returned
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if ($row['status'] !== 'unverified' || $row['status'] !== 'rejected') {
          ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="profile-img img-fluid" src="../doctors/profile/<?php echo $row['profile']; ?>" alt="Doctor Profile Picture">
              <h2 class="mb-4"><?php echo $row['fullname']; ?></h2>
              <p class="mb-2">Address: <?php echo $row['address']; ?></p>
              <p class="mb-2">Experience: <?php echo $row['experience']; ?></p>
              <p class="mb-2">DOB: <?php echo $row['dob']; ?></p>
              <p class="mb-2">Profession: <?php echo $row['education']; ?></p>
              <p class="mb-2">Description: <?php echo $row['description']; ?></p>
              <form action="" method="post">
                <input type="hidden" name="did" value="<?php echo $row['did']; ?>">
                <input type="hidden" name="name" value="<?php echo $row['fullname']; ?>">
                <button type="submit" class="btn btn-primary">HIRE ME</button>
              </form>
            </div>
          </div>
          <?php 
        } else {
          echo '<h1> No data found </h1>';
        }
      }
    } else {
      echo '<h1> No data found </h1>';
    }
    ?>
  </div>
</div>

</body>
</html>
