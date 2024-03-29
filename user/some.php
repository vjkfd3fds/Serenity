<?php
	
	include_once '../php/config.php';
	if ($_GET['did'] && $_GET['uid']) {
		$did = $_GET['did'];
		$uid = $_GET['uid'];

		$sql = "SELECT * FROM appointment_details WHERE uid = '$uid' AND did = '$did'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$sql2 = "SELECT * FROM doctor_details WHERE did = '$did'";
		$result2 = $conn->query($sql2);
		$row2 = $result2->fetch_assoc(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Demo</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    /* Center the container */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Optionally, this will center vertically as well */
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><?php echo $row['fullname']; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted">ID: <?php echo $row['uid']; ?></h6>
          <h6 class="card-subtitle mb-2 text-muted">Name of the doctor: <?php echo $row2['fullname']; ?></h6>
        </div>
        <div class="card-body">
          <p class="card-text">Appointment date: <?php echo $row['appointment_time']; ?></p>
          <p class="card-text">Appointment time: <?php echo $row['appointment_date']; ?></p>
          <!-- Add a button for Call to Action if applicable -->
          <!-- <a href="#" class="btn btn-primary">Call to Action</a> -->
        </div>
        <div class="card-footer text-muted">
          Contact Information: <?php echo $row['address']; ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
