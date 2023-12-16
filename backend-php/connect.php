<?php
    $conn = mysqli_connect("localhost", "root", "",  "stress.db.dev");
    if (!$conn) {
        echo 'something went wrong ' . mysqli_connect_error();
    }
?>