<?php
	$files = scandir("articles/");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			foreach ($files as $file) 
			{
				if(is_file("articles/$file"))
				{
					echo "<h1>$file</h1>";
					$a = fopen("articles/$file", "r");
					while(!feof($a)) {
					  echo fgets($a);
					}
					fclose($a);
				}
			}

		?>	

</body>
</html>