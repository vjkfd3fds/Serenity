<?php 

	include ('../php/config.php');

	$sql = "SELECT * FROM doctor_details";
	$result = $conn->query($sql);

	$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1><?php echo $row['status']; ?></h1>
</body>
</html>