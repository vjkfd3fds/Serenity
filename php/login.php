<?php 
    include('config.php');

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

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
            $checking_email = $row['email'];

            if ($checking_email == $email) {
                echo '<script>alert("This email is already in use"); document.location.href="../login.html"</script>';
                exit;
            }

            setcookie("uid", $uid, time() + 3600, "/");
            echo '<script>alert("Successfully logged in"); document.location.href="../user/profile.php";</script>';
            exit;
        } else  {
            echo '<script>alert("This account does not exist"); document.location.href="../login.html";</script>';
            exit;
        }

        $stmt->close();
    } else {
        echo 'Something went wrong: ' . $conn->error;
    }

    $conn->close();
?>
