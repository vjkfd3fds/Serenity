<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire Me Cards</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/subscribe.css">
  <style>
    .hire-card {
      margin-bottom: 20px; /* Add margin between cards */
    }
  </style>
</head>
<body>

<?php 
include_once '../php/config.php';

$sql = "SELECT * FROM doctor_details WHERE status = 'verified'";
$var = $conn->query($sql);

// Check if there are rows returned
if ($var->num_rows > 0) {
?>
<div class="container mt-5">
  <div class="row">
<?php 
  while ($row = $var->fetch_assoc()) {
?>
    <div class="col-md-6">
      <div class="hire-card">
        <div class="text-center">
          <img src="../doctors/profile/<?php echo $row['profile']; ?>" alt="Profile Picture" class="profile-img">
          <h3 class="mt-3"><?php echo $row['fullname']; ?></h3>
          <p>Full Stack Developer</p>
        </div>
        <hr>
        <form method="POST" action="subscribe.php">
	        <div class="contact">
	          <h5>Contact Information:</h5>
	          <ul class="contact-info">
	            <li><i class="fas fa-envelope"></i> <?php echo $row['workemail']; ?></li>
	            <li><i class="fas fa-phone"></i> <?php echo $row['phonenumber']; ?></li>
	            <li><i class="fas fa-map-marker-alt"> </i><?php echo $row['address']; ?></li>
	            <input type="hidden" name="did" value="<?php echo $row['did']; ?>">
	            <input type="hidden" name="name" value="<?php echo $row['fullname']; ?>">
	          </ul>
	        </div>
	        <div class="personal-info">
	          <h5>Personal Information:</h5>
	          <ul class="contact-info">
	            <li><strong>Full Name: <?php echo $row['fullname']; ?></strong></li>
	            <li><strong>Date of Birth:</strong> <?php echo $row['dob']; ?></li>
	            <li><strong>Address:</strong> <?php echo $row['address']; ?></li>
	            <li><strong>Phone Number:</strong> <?php echo $row['phonenumber']; ?></li>
	            <li><strong>Age:</strong> <?php echo $row['age']; ?></li>
	          </ul>
	        </div>
	        <div class="work-info">
	          <h5>Work Information:</h5>
	          <ul class="contact-info">
	            <li><strong>Date Started Working:</strong> <?php echo $row['workingdate']; ?></li>
	            <li><strong>Experience:</strong> <?php echo $row['experience']; ?></li>
	          </ul>
	        </div>
	        <div class="education">
	          <h5>Education:</h5>
	          <p><?php echo $row['education']; ?></p>
	        </div>
	        <div class="description">
	          <h5>Description:</h5>
	          <p><?php echo $row['description']; ?></p>
	        </div>
	        <div class="text-center mt-4">
	          <button type="submit" name="hire" class="btn btn-primary">Hire Me</button>
	        </div>
	      </div>
	 	</form>
	</div>
<?php 
  } // End of while loop
?>
  </div>
</div>
<?php 
}
?>

</body>
</html>

<?php 
	
	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$did = $_POST['did'];
		$fullname = $_POST['name'];

		$sql = "INSERT INTO subscriptions VALUES ('$did', '$uid', '$fullname', 1)";
		if ($conn->query($sql) === TRUE) {
			echo '<script>alert("You successfully subscribed to ' . $fullname .'");</script>';
		} else {
			echo 'Something went wrong ' . $conn->error;
		}
	}
?>
