<?php 
	if (isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
		setcookie("uid", $uid, time() - 3600, "/");
		echo '<script>alert("successfully logged out!!"); window.location.href="../index.php"</script>';
	}

?>