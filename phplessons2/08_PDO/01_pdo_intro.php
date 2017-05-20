<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$db = new PDO("mysql:host=$hostname;dbname=lesson", $username, $password);
   
$sql = "SELECT * FROM EmployeeContacts";

//$a = $db->query($sql);

echo "<pre>";
var_dump($db->query($sql));
echo "</pre>";


foreach ($db->query($sql) as $row)
    {

    	echo $row["ContactInfo"]."<br>";
    }

    /*** close the database connection ***/
    $db = null;

?>    