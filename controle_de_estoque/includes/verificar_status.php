<?php
	if (!isset($_SESSION["status"])) {
		echo "<script>window.location.href = 'index.php';</script>";
	}
?>