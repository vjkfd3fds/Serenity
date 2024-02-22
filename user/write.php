<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing Section</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/write.css">
</head>
<body>    
    <!-- Paper container -->
    <div class="paper">
        <!-- Header -->
        <div class="row">
            <div class="col-md-3">
                <img style="display: none;" src="images/header anim left.png" alt="Header animal" class="header-img">
            </div>
            <div class="col-md-6 text-center">
                <h2>Writing Space</h2>
            </div>
        </div>

        <!-- Description -->
        <p class="des">Let's get into a relaxed state of mind and thoughts. Feel free to write whatever comes to your mind!</p>
        
        <!-- Writing space -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="textSpace">
                <textarea class="notes" name="note" id="writingSpace" rows="10"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary mt-3">Save</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php 
    include_once '../php/config.php';

    if (isset($_COOKIE['uid'])) {
        $uid = $_COOKIE['uid'];

        if (isset($_POST['submit'])) {
            $note = $_POST['note']; // Changed from $_POST['notes'] to $_POST['note']

            $sql = "INSERT INTO note (uid, note) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $uid, $note); // Corrected the parameter binding
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Note saved successfully!');</script>";
            } else {
                echo "Failed to save note.";
            }
        } 
    } else {
        echo "Cookie has not been set";
    }
?>
