<?php 
	include_once '../php/config.php';

	if (isset($_COOKIE['did'])) {
		$did = $_COOKIE['did'];
	} else {
		echo 'No cookie';
	}

	$sql = "SELECT * FROM subscriptions WHERE did = '$did'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscribed Users</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <?php while ($row = $result->fetch_assoc()): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Subscribed Users</h5>
        <p class="card-text"><?php echo $row['email']; ?></p>
      </div>
    </div>
  <?php endwhile; ?>
</div>

</body>
</html>
