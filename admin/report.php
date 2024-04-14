<?php 
	include_once '../php/config.php';
	$sql = "SELECT * FROM report";
	$result = $conn->query($sql);

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ban'])) {
		$doctor_id_to_ban = $_POST['doctor_id_to_ban'];
		$sql_ban = "UPDATE doctor_details SET status = 'banned' WHERE did = '$doctor_id_to_ban'";
		if ($conn->query($sql_ban) === TRUE) {
			echo '<div class="alert alert-success" role="alert">Doctor has been banned successfully.</div>';
		} else {
			echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Report Data</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Doctor ID</th>
							<th>User ID</th>
							<th>Reason</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row['user_name']; ?></td>
								<td><?php echo $row['did']; ?></td>
								<td><?php echo $row['uid']; ?></td>
								<td><?php echo $row['reason']; ?></td>
								<td>
									<form method="POST" action="">
										<input type="hidden" name="doctor_id_to_ban" value="<?php echo $row['did']; ?>">
										<button type="submit" name="ban" class="btn btn-danger btn-sm">Ban</button>
									</form>
								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
