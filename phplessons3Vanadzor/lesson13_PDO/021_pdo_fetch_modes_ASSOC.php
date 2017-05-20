<?php
include ("dbconfig.php");

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
   
$sql = "SELECT * FROM EmployeeContacts LIMIT 0,20";
$stmt = $db->query($sql);
echo "FETCH_ASSOC start<br>";
while($result = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
}
 $db = null;
?>    	