<?php
define("HOST", "localhost");
define("DBUser", "testuser");
define("DBPassword", "myfancypassword");
define("DBName","trayning");

if(isset($_GET["EmpID"]) && $_GET["EmpID"]!="")
{

	$emp = $_GET["EmpID"];
	
	$link = mysqli_connect(HOST, DBUser, DBPassword, DBName);	
	mysqli_set_charset($link,"utf8");

		if(mysqli_connect_errno($link) == NULL)
		{

			$sql = "SELECT gago
					FROM Employees AS E
					WHERE ID=$emp";

			$result = mysqli_query($link,$sql);		
			
			if($result)
			{
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
				{
						
					foreach ($row as $field) {
						echo $field." ";
					}
					echo "<br>";

				}
				
			}
			else
			{
				echo mysqli_error($link);	
			}


		}
		else
		{
			echo mysqli_connect_error();
		}
		
		mysqli_close($link);
}




?>