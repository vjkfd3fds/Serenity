<?php 
    include_once('connect.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = md5($password);

        $sql = "SELECT * FROM users WHERE email = ? and password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $hashed_password);
        $result = $stmt->execute();
        $final = $stmt->get_result();

        if ($final->num_rows > 0) {
            echo '<script>alert("Successfully logged in!");</script>';
            echo '<script>window.location.href="new.html";</script>';
        } else {
            echo '<script>alert("This user does not exists");</script>';
            echo '<script>window.location.href="../src/pages/login.html";</script>';
        }
    } else {
        echo 'something went wrong ' . $conn->error;
        echo 'something went wrong ' . $stmt->error;
    }
?>