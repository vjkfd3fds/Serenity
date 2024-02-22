<?php
	include ('../php/config.php'); 
	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	} else {
		header('Location: login.php');
	}

	$sql = "SELECT * FROM users WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("i", $uid);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stress Relief Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

<div class="container">
	<h1>Welcome, <?php echo $row['firstname'];?>!</h1>

	<div class="links">
		<ul>
			<li><a href="songs.php">Play Songs</a></li>
			<li><a href="books.php">Read Books</a></li>
			<li><a href="stress_calculate.php">Calculate Stress (Current Stress)</a></li>
			<li><a href="chat.php">Chat with a Bot</a></li>
			<li><a href="write.php">Writing Board</a></li>
			<li><a href="yoga.php">Yoga</a></li>
			<li><a href="../php/logout.php">Logout</a></li>
		</ul>
	</div>
</div>

</body>
</html>
