<?php 
	include_once '../php/config.php';

	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
		echo '<script>alert("Cookie has been set. Cookie Id:'.$uid.'");</script>';
	} else {
		header('Location: login.php');
	}

	echo $uid;
?>