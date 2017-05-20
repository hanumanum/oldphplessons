<?php
	$dir = "uploads/";
	$files = scandir($dir);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	foreach ($files as $f) {
	 	if(is_file($dir.$f))
	 	{
	 		echo "<img class='myimages' src='$dir$f'>";
	 	}
	 } 	
	?>
</body>
</html>