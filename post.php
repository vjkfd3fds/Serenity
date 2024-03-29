<?php 
	include_once 'php/config.php';
	$sql = "SELECT * FROM doctor_details";
	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Card with Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Contact Us</h5>
                <form action="post.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Contact:</label>
                        <select class="form-control" id="reason" name="reason" required>
                            <option value="">Select a doctor</option>
                             <?php while ($row = $result->fetch_assoc()) {
                        	echo "<option value=".$row['fullname'] .">".$row['fullname'] . "</option>";
                        } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];
		$message = $_POST['message'];
		$reason = $_POST['reason'];

		$sql = "INSERT INTO feedbacks VALUES ('$email', '$message', '$reason')";
		if ($conn->query($sql) === TRUE) {
			echo '<script>alert("successfull");</script>';
			exit;
		} else {
			echo $conn->error;
		}
	}
?>