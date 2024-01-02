<?php 
    include('config.php');

    if (isset($_POST['login'])) {
        $z = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT email, password FROM users WHERE z = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $z, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $sql1 = "SELECT id FROM users WHERE z = '$z' AND password = '$password'";
            $result = $conn->query($sql1);
            $row = $result->fetch_assoc();
            $id = $row['id'];

            setcookie("uid", $id, time() + 3600, "/");
            echo '<script>alert("Successfully logged in"); document.location.href="../user/profile.php";</script>';
        } else  {
            echo '<script>alert("This account does not exist"); document.location.href="../login.html";</script>';
        }

        $stmt->close();
    } else {
        echo 'Something went wrong: ' . $conn->error;
    }

    $conn->close();
?>
