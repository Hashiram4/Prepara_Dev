<?php
	session_start();
	$_SESSION['window_alterar'] = 1;
	echo "<script>window.location.href = '../modelo.php';</script>";
?>