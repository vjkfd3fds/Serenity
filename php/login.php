<?php 
    include('connect.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT email, password FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo '<script>alert("Successfully logged in"); document.location.href="../home.html";</script>';
        } else  {
            echo '<script>alert("This account does not exist"); document.location.href="../login.html";</script>';
        }

        $stmt->close();
    } else {
        echo 'Something went wrong: ' . $conn->error;
    }

    $conn->close();
?>
