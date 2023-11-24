<?php
$conn = mysqli_connect("localhost", "root", "",  "stress-db");
if (!$conn) {
    echo 'something went wrong ' . mysqli_connect_error();
}
?>