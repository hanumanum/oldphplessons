<?php
$login="gago";
$password="123";


session_start();
if(isset($_POST["submit"]))
{
	if(isset($_POST["login"]) && $_POST["login"]==$login && isset($_POST["password"]) && $_POST["password"]==$password)
	{
		
		if(!isset($_SESSION["login"]))
		{
			$_SESSION["login"]=$login;
		}
		
		echo "Բարհաջող մտար";
	}
	else
	{
		echo "Սխալ է";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Մուտքի ֆորմա</title>
</head>
<body>

<?php
	if(isset($_SESSION["login"]))
	{
		echo "Բարև ".$_SESSION["login"];
		echo "<a href='logout.php'>Դուրս գրվել </a>";		
			
	}
	else
	{
	echo '	

	<h3>Մուտք</h3>
	<form action="" method="post">
		<input type="login" name="login" placeholder="login"><br><br>
		<input type="password" name="password" placeholder="password"><br><br>
		<input type="submit" name="submit" value="Մուտք">
	</form>';
	}

	//unset($_SESSION["login"]);
?>
</body>
</html>