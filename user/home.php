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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindCraft</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="css/home.css">
    <script src="js/script.js"></script>
</head>
<body style="height: 100%;">
    <div class="header">
        <div class="message">
            <h1 class="h1" style="font-family: monospace;">Hello <?php echo $row['firstname']; ?></h1>
        </div>
    </div>
    <div class="welcome">
        <table>
            <tr>
                <th style="width: 50%;">
                    <a href="chatbot/index.html">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Chat with Me</h1>
                            <img src="images/chat.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="games.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Game for you</h1>
                            <img src="images/game.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th style="width: 50%;">
                    <a href="books.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Reading Time</h1>
                            <img src="images/reading.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="yoga_start.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Yoga</h1>
                            <img src="images/yoga.png" alt="" style="width: 5%">
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th style="width: 50%;">
                    <a href="meditation.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Meditation</h1>
                            <img src="images/meditation.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="stress_calculate.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Calculate Stress</h1>
                            <img src="images/music.png" alt="" style="width: 5%">
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th style="width: 50%;">
                    <a href="https://www.pixilart.com/draw">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Drawing Space</h1>
                            <img src="images/drawing.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="write.php">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Writing Space</h1>
                            <img src="images/writing.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th style="width: 50%;">
                    <a href="Music Player/index.html">
                        <div class="options">
                            <h1 style="font-size: 20px; font-family: monospace;">Music</h1>
                            <img src="images/drawing.png" alt="" style="width:5%;">
                        </div>
                    </a>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>