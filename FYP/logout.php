<?php
	session_start();
	$_SESSION=array();
	session_destroy();
	echo "Logging Out";
	header('refresh:1;url=index.php');
?>