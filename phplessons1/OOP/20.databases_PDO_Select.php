<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lesson";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

// prepare sql and bind parameters
$stmt = $conn->prepare("SELECT * FROM articles WHERE id=:id");


$stmt->bindParam(':id', $id);
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


$id = 5;
$stmt->execute();
$currArticle =  $stmt->fetchAll();


echo $currArticle[0]["title"];
echo $currArticle[0]["content"];


$id = 24;
$stmt->execute();
$currArticle =  $stmt->fetchAll();

echo $currArticle[0]["title"];
echo $currArticle[0]["content"];

$conn = null;