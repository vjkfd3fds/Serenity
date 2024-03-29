<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php 
            include ('../php/config.php');
            if (isset($_GET['uid'])) {
                $fullname = $_GET['uid'];
                $sql = "SELECT * FROM feedbacks WHERE name = '$fullname'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="card">';
                    echo '<div class="card-header"><h5 class="card-title">Feedbacks for '.$fullname.'</h5></div>';
                    echo '<div class="card-body">';
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="alert alert-info">';
                        echo '<strong>Email:</strong> ' . $row['email'];
                        echo '<br>';
                        echo '<strong>Message:</strong> ' . $row['message'];
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-warning">No feedback found for '.$fullname.'</div>';
                }
            } else {
                echo '<div class="alert alert-danger">User ID not provided</div>';
            }
        ?>
    </div>
</body>
</html>
