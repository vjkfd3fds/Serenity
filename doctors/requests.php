<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body onload="alert('This is the requests page doctors who have created their account are obligated to fill this form to check whether you\'re a real doctor or not the admins will check this form you can see the status after you fill this form.');">

	<?php 
		if (isset($_COOKIE['did'])) {
			$did = $_COOKIE['did'];
			echo $did;
		}
	?>
</body>
</html>