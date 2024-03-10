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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Dashboard</title>
   <style>
   body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('images/background2.webp'); /* Corrected path */
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.background {
   
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    color: #000000;
}



h1 {
    margin-bottom: 20px;
}

.card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    cursor: pointer;
    width: 300px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

h2 {
    margin-top: 0;
}

p {
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #2980b9;
}
button {
    padding: 10px 20px;
    background-color: transparent;
    color: #3498db;
    border: 3px solid #3498db;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

button:hover {
    background-color: #3498db;
    color: #fff;
}


.card a {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none; /* Optional: remove underline from anchor */
}
   </style>
</head>
<body>
    <div class="container">
        <div class="unni">
        <h1>Welcome <?php echo $row['firstname']; ?> !</h1>
        <div class="card-container">
            <div class="card">
                <a href="stress_calculate.php">
                    <h2>Calculate Stress</h2>
                    </a>
                    <p>Calculate your current stress with accurate score.</p>
            </div>
            <div class="card">
                <a href="games.php">
                    <h2>Play Games</h2>
                     </a> 
                    <p>Play games to reduce your stress.</p>           
            </div>
            <div class="card">
                <a href="music-player/index.php">
                    <h2>Listen Music</h2>
                    </a>
                    <p>Music sometimes helps us to reduce stress and pain.</p>    
            </div>
            <div class="card">
                <a href="Meditation.php">
                    <h2>Meditation</h2>
                    </a>
                    <p>Take a deep breath...</p>
            </div>
            <div class="card">
                <a href="yoga/yoga_start.php">
                    <h2>Yoga</h2>
                    </a>
                    <p>Do this everyday and everything will be alright.</p>
            </div>
            <div class="card">
                <a href="games.php">
                <h2>Chat Bot</h2>
                </a>
                <p>Coming soon....</p>
            </div>
            <div class="card">
                <a href="write.php">
                <h2>Writing Board</h2>
                </a>
                <p>Write your issues here. It helps, sometimes.</p>
            </div>

            <div class="card">
                <a href="subscribe.php">
                <h2>subscribe</h2>
                </a>
                <p>Write your issues here. It helps, sometimes.</p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
