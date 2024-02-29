<?php 
    include('config.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $check_email = $_POST['email'];

        $sql = "SELECT email, password FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $sql1 = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($sql1);
            $row = $result->fetch_assoc();
            $uid = $row['id'];

            setcookie("uid", $uid, time() + 3600, "/");
            echo '<script>alert("Successfully logged in"); document.location.href="../user/home.php";</script>';
            exit;
        } else  {
            echo '<script>alert("This account does not exist"); document.location.href="../user/login.php";</script>';
            exit;
        }

        $stmt->close();
    } else {
        echo 'Something went wrong: ' . $conn->error;
    }

    $conn->close();
?>
