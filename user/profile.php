<?php 
	include_once '../php/config.php';

	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
		//echo '<script>alert("Cookie has been set. Cookie Id:'.$uid.'");</script>';
	} else {
		header('Location: login.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../images/note.png">
    <title>Serenity | Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
    if (isset($_COOKIE['uid'])) {
        $user_id = $_COOKIE['uid'];
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-12 col-md-6 mx-auto text-center">';
            echo '<h1 class="mt-4">Welcome, ' . $row['firstname'] . '</h1>';
            ?>
            <?php 
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateForm();">
                    <h1 class="text-center">User Info</h1>
                    <div class="mb-3">
                        <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <a class="d-block text-center mb-3" href="password.php">Update password</a>
                    <div class="d-grid">
                        <input type="submit" value="Update" class="btn btn-primary" name="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


<script>
    function validateForm() {
        let firstName = document.getElementById("firstname")[0].value.trim();
        let lastName = document.getElementById("lastname").value.trim();
        let email = document.getElementById("email").value.trim();
        let password = document.getElementById("password").value.trim();

        if (password.length < 8) {
            alert("Password should be at least 8 characters long.");
            return false;
        }

        if (firstName.length < 5) {
            alert("First and Last Name should be at least 5 characters long.");
            return false;
        }

        return true;
    }
</script>
</html>

<?php 

    if (isset($_POST['button'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM users";
        $stmt1 = $conn->prepare($sql);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $row = $result->fetch_assoc();
        $id  = $row['id'];

        $stmt = $conn->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $id);
        if ($stmt->execute() === TRUE) {
            echo '<script>alert("Successfully updated your profile");</script>';
            echo '<script>document.location.href="profile.php";</script>';
        }
    }
?>
