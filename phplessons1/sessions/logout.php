<?php
	session_start();
	unset($_SESSION["login"]);

	header('Location: http://localhost/lessons/sessions/login.php');
?>