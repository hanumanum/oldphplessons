<?php
	define("HOST", "localhost");
	define("DBUser", "testuser");
	define("DBPassword", "myfancypassword");
	define("DBName","trayning");

	$link = mysqli_connect(HOST, DBUser, DBPassword, DBName);   
    mysqli_set_charset($link,"utf8");

?>