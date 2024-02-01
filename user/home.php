<?php
	include ('../php/config.php'); 
	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
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
	<title></title>
</head>
<body>

<h1><?php echo "logged in as " . $row['firstname'];?></h1>

<div>
	<ul>
		<li><a href="songs.php">Play songs</a>
		<li><a href="books.php">Read books</a>
		<li><a href="stress_calculate.php">Calculate stress (current stress)</a>
		<li><a href="chat.php">Chat with a bot</a>
		<li><a href="writing.php">Writing board</a>
		<li><a href="yoga.php">Yoga</a>
		<li><a href="../php/logout.php">Logout</a>
	</ul>
</div>
</body>
</html>