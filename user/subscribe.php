<?php 
	include_once '../php/config.php';


	$sql = "SELECT * FROM doctor_details WHERE status = 'verified'";
	$var = $conn->query($sql);
	$row = $var->fetch_assoc();
?>