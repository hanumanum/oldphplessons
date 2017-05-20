<?php

define("HOST", "localhost");
define("DBUser", "testuser");
define("DBPassword", "myfancypassword");
define("DBName","trayning");

//$host = "localhost";


$link = mysqli_connect(HOST, DBUser, DBPassword, DBName);	
mysqli_set_charset($link,"utf8");

	if(mysqli_connect_errno($link) == NULL)
	{

		$sql = "SELECT * 
				FROM Employees AS E";

		$result = mysqli_query($link,$sql);		
		
		/*
		$row = mysqli_fetch_array($result);
		echo $row[0]." ".$row[1]."<br>";
		echo $row["Name"]." ".$row["Lname"]."<br>";

		$row = mysqli_fetch_array($result);
		echo $row[0]." ".$row[1]."<br>";
		echo $row["Name"]." ".$row["Lname"]."<br>";
		*/

		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
		{
				
			foreach ($row as $field) {
				echo $field." ";
			}
			echo "<br>";

			//echo $row["Name"]." ".$row["Lname"]."<br>";

		}

		mysqli_close($link);
	}

/*
echo "<pre>";
var_dump($db);
echo "</pre>";
*/




?>