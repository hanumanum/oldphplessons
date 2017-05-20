<?php
$idd = 5;

include ("dbconfig.php");

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
   
$stmt = $db->prepare("SELECT * FROM EmployeeContacts WHERE ContactID=:idd");

$stmt->bindParam(':idd', $idd, PDO::PARAM_INT);
//$stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR, 5);
//$a = $db->query($sql);
$stmt->execute();
$result = $stmt->fetchAll();
echo "<pre>";
var_dump($result);
echo "</pre>";
$idd=6;
$stmt->execute();
$result = $stmt->fetchAll();
echo "<pre>";
var_dump($result);
echo "</pre>";
 /*** close the database connection ***/
 $db = null;
?>    