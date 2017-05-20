<?php
$hostname = "localhost";
$username = "root";
$password = "root";



try {
	$db = new PDO("mysql:host=$hostname;dbname=trayning", $username, $password);
	$sql = "SELECT * FROM EmployeeContacts";
		
	foreach ($db->query($sql) as $row)
    {
    	echo $row["ContactInfo"]."<br>";
    }

    $db = null;
} catch (Exception $e) {
	
}



/*   
$sql = "SELECT * FROM EmployeeContacts";
//$a = $db->query($sql);
echo "<pre>";
var_dump($db->query($sql));
echo "</pre>";
foreach ($db->query($sql) as $row)
    {
    	echo $row["ContactInfo"]."<br>";
    }
  */
    /*** close the database connection ***/
    //$db = null;
?> 