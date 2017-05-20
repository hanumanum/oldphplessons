<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Փսեվսոսայտ</title>
</head>
<body>
<?php
	if(isset($_GET["p"]) && $_GET["p"]!="")
	{
		$p=$_GET["p"];
		$ariclePath = "pages/".$p.".html";

		if(file_exists($ariclePath))
		{
			$file = fopen($ariclePath, "r");
			echo fread($file, filesize($ariclePath));
			fclose($file);
		}
		else
		{
			echo "Չկա այդպիսի համարով հոդված";
		}
	}
	else
	{
		echo "Ոչ մի հոդված չկա";
	}

?>	
</body>
</html>