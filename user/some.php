<?php
	
	include_once '../php/config.php';
	if ($_GET['did'] && $_GET['uid']) {
		$did = $_GET['did'];
		$uid = $_GET['uid'];

		$sql = "SELECT * FROM appointment_details WHERE uid = '$uid' AND did = '$did'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php echo $row['appointment_time']; ?>
</body>
</html>