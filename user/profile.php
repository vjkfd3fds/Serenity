<?php 
	include_once '../php/config.php';
	error_reporting(E_ALL);

	if (isset($_COOKIE['uid'])) {
		$cid = $_COOKIE['uid'];
		echo $cid;
	} else {
		echo 'Cookie has not been set';
	}

?>