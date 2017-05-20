<?php
	$sql = "SELECT * FROM pages ORDER BY title DESC LIMIT 0,4;";

	$link = mysqli_connect("localhost", "root", "root", "lesson");
	mysqli_set_charset($link,"utf8");	
	if(mysqli_connect_errno($link)==NULL)
	{
			
		$result = mysqli_query($link,$sql);
		if($result!=false)
		{	
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				
				echo "<h1>".$row["title"]."</h1>";
				$txt = mb_substr($row["content"],0,100,"utf8");	

				echo "<p>".$txt."</p>";
				echo "<a href='tarberak7article.php?pid=".$row["id"]."'>կարդալ ավելին</a>";
			}
		}
		mysqli_close($link);
	}	



?>