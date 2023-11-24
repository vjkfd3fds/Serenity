<?php 
    include_once 'connect.php';

    if (isset($_POST['submit'])) {
        $fistname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $dob = date('Y-m-d', strtotime($_POST['dob']));

        $sql = "INSERT INTO users (fistname, lastname, email, phonenumber, dob, gender) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();
        if ($result == TRUE) {
            echo '<script>alert("successfully created your account");</script>';
            echo '<script>window.location.href="home.html";</script>';
        } else {
            echo 'something went wrong' . $conn->error;
            echo 'something went wrong' . $stmt->error;
        }
    }

?>