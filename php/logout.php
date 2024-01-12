<?php 
	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}
	setcookie("uid", $uid, time() - 3600, "/");

?>