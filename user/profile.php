<?php 
	include_once '../php/config.php';
	error_reporting(E_ALL);

	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
		echo $uid;
	} else {
		echo 'Cookie has not been set';
	}

?>