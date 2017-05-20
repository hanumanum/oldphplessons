<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lesson";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

// prepare sql and bind parameters
$stmt = $conn->prepare("SELECT * FROM articles WHERE id BETWEEN :stid AND :endid");


$stmt->bindParam(':stid', $stid);
$stmt->bindParam(':endid', $endid);

$result = $stmt->setFetchMode(PDO::FETCH_OBJ);

$stid = 6;
$endid=15;

$stmt->execute();
$currArticle =  $stmt->fetchAll();


foreach ($currArticle as $art) 
{
	echo $art->title;
	echo "<br>";
	echo $art->content;
	echo "<br>";
	echo "<br>";
}


$conn = null;