<?php
	$loggedIn=false;
	session_start();

	$login = "gago";
	$password = "p@ssw0rd";

if(isset($_POST["login"]) && isset($_POST["password"]))
{
	if($_POST["login"]==$login && $_POST["password"]==$password)
	{
		
		$_SESSION["login"]="gago";
		$_SESSION["loginTime"]=time();
	
	}
}



?>


<?php if(isset($_SESSION["login"]) && $_SESSION["login"]!=""): ?>
		<?php $loggedIn = true; ?>
		<a href="logout.php">Դուրս Գալ</a>

<?php else: ?>
		<form action="" method="post">
			<input type="text" name="login"><br>
			<input type="password" name="password"><br>
			<input type="submit" name="Login"><br>
		</form>
		

<?php endif; ?>	
