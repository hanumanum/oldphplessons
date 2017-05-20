<?php
error_reporting(E_ALL);

$dir="pictures/";
if(is_dir($dir))
{
	$masiv = scandir($dir);
	for($i=0; $i<count($masiv); $i++)
	{
		if(is_dir($masiv[$i])!=true )
		{
		    $path=$dir.$masiv[$i];
			echo "<a href = $path><img src=' ".$path." ' border=2  width='150px' height=150>";
		}

	}
}
?>