<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	echo $_SESSION["counter"];
	echo $_SESSION["login"];
	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";
?>

</body>
</html>