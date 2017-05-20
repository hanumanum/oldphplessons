<?php
	$a = (int)$_GET["pid"];
	$sql = "SELECT * FROM pages WHERE id=".$a;

	$link = mysqli_connect("localhost", "root", "root", "lesson");
	mysqli_set_charset($link,"utf8");	
	if(mysqli_connect_errno($link)==NULL)
	{
			
		$result = mysqli_query($link,$sql);
		if($result!=false)
		{	
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
				echo "<h1>".$row["title"]."</h1>";
				echo "<i>հրապարակված է ".$row["date"]."</i><br>";
				$txt = $row["content"];	

				echo "<p>".$txt."</p>";
		}
		mysqli_close($link);
	}	



?>