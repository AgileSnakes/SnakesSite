<?php
	setcookie("User","");
	session_destroy();
	header('Location: index.php');
?>