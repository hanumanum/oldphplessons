<?php
error_reporting(E_ALL & ~E_WARNING);

$DBServer = 'localhost'; // կամ 'localhost' or '192.168.1.100'
$DBUser   = 'root';
$DBPass   = 'root';
$DBName   = 'lesson';

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$conn->set_charset("utf8");

// ստուգում ենք կապը
if ($conn->connect_error) 
{
			echo $conn->connect_error;
  
}

$articleLenght=15000;


if(isset($_GET) && $_GET["articleID"]!="")
{

	$sql = "SELECT * FROM articles WHERE id=".$_GET["articleID"];

}
else
{
	$sql = "SELECT * FROM articles ORDER BY id DESC";
	$articleLenght = 150;	
}

$result = $conn->query($sql);


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	p, h2, a{
		width:400px;
		margin: 0 auto;
		display: block;
		
	}

	p{
		margin-bottom: 25px;
	}
	a{
		text-align: right;
	}


	</style>
</head>
<body>

<?php

if($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
     	echo "<h2>".$row["title"]." No ".$row["id"]."</h2>";
     	echo "<p>".mb_substr($row["content"],0,$articleLenght)."</p>";
		
     	if($articleLenght==150)
     	{
			echo "<a href='?articleID=".$row["id"]."'> ավելին </a>";     		
     	}

    }
} 
else 
{
    echo "0 results";
}


?>




</body>
</html>

<?php

$conn->close();

?>

