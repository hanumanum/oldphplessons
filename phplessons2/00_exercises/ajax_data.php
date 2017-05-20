<?php
	$sql = "SELECT * FROM pages ORDER BY title DESC LIMIT 0,4;";
	$all = [];

	$link = mysqli_connect("localhost", "root", "root", "lesson");
	mysqli_set_charset($link,"utf8");	
	if(mysqli_connect_errno($link)==NULL)
	{
			
		$result = mysqli_query($link,$sql);
		if($result!=false)
		{	
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				array_push($all,$row);
								
			}
		}
		mysqli_close($link);
	}	


	echo json_encode($all);



?>