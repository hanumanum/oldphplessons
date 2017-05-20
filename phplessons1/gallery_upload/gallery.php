<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	img{
		height: 150px;
		margin-right:15px;
		border: solid 2px green;
	}

	</style>
</head>
<body>

<?php
error_reporting(E_ALL);

$dir="pictures/";
if(is_dir($dir))
{
	$masiv = scandir($dir);
	for($i=0; $i<count($masiv); $i++)
	{
		if(is_dir($masiv[$i])!=true)
		{
		    $path=$dir.$masiv[$i];
			echo "<a href = $path><img src='$path'>";
		}

	}
}



?>

</body>
</html>


