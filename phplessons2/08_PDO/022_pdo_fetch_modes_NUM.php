<?php

include ("dbconfig.php");

$db = new PDO("mysql:host=$hostname;dbname=lesson", $username, $password);
   
$sql = "SELECT * FROM EmployeeContacts LIMIT 0,20";

$stmt = $db->query($sql);

echo "FETCH_NUM start<br>";

while($result = $stmt->fetch(PDO::FETCH_NUM))
{
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

}
 $db = null;

?>    

 