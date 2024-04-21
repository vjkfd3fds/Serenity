<?php 
	define("DBSERVER", "localhost");
	define("DBUSER", "root");
	define("DBPASSWORD", "");
	define("DBNAME", "stress");
	
	$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD, DBNAME);

	if (!$conn) {
		echo 'Something went wrong Error ' . mysqli_connect_error();
	}
?>