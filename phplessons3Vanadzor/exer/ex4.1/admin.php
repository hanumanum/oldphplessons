<?php
	error_reporting(E_ALL);
	//TODO անել ստուգումներ ․․․․
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$t = $_POST["title"];
		$c = $_POST["content"];
		$file = fopen("articles/$t","x");
		fwrite($file, $c);
		fclose($file);
	}
	
	if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["del"])){
		$del = $_GET["del"];
		if($del){
			unlink("articles/$del");
		}

	}
	$files = scandir("articles/");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="title">
		<br><br>
		<textarea name="content"></textarea>
		<br><br>
		<input type="submit" value="Պահպանել">
	</form>
	<br>
	<?php
		foreach($files as $file)
		{
			if(is_file("articles/$file"))
			{
				echo $file;
				echo " <a href='?del=$file'>x</a>";
				echo "<br>";
			}
		}

	?>

</body>
</html>