<?php 
	setcookie("username", " ", time() - 3600, "/"); //reduce time to negative : expired cookie
	header('Location: index.php');
?>