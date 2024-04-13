<?php 

include_once '../php/config.php';

if (isset($_COOKIE['uid'])) {
    $uid = $_COOKIE['uid'];

    $sql = "SELECT * FROM appointment_details WHERE uid = '$uid'";
    $result = $conn->query($sql);


    $sql2 = "SELECT * FROM subscriptions WHERE uid = '$uid'";
    $result2 = $conn->query($sql2);

    if ($result->num_rows > 0 && $result2->num_rows > 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscribed Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1 class="mb-4">My Subscriptions</h1>
  
  <div class="card-deck">
    <form method="POST" action="subscribed.php">
        <?php 

            while ($row2 = $result2->fetch_assoc()) {
            while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">
              <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $row['did']; ?>">
                <h5 class="card-title"><?php echo $row2['doctorname']; ?></h5>
                <a class="btn btn-primary" href="some.php?did=<?php echo urlencode($row['did']); ?>&uid=<?php echo urlencode($row['uid']); ?>">View Details</a>
                <button class="btn btn-danger" type="submit" name="wow" value="<?php echo $row['did']; ?>">Remove</button>

              </div>
            </div>
        <?php 
            }
        }
    }

        ?>
    </form>
  </div>
</div>
</body>
</html>

<?php
    if (isset($_POST['wow'])) {
        $id_to_remove = $_POST['wow'];

        $delete_sql = "DELETE FROM appointment_details WHERE did = '$id_to_remove'";
        
        if ($conn->query($delete_sql) === TRUE) {
            echo '<script>alert("Subscription removed successfully."); window.location.href="subscribed.php";</script>';
            exit;
        } else {
            echo "Error removing subscription: " . $conn->error;
        }
    } else {
        echo 'NOTHING FOUND';
    }
} else {
    echo "User ID not found in cookies.";
}
?>
