<?php
/*Create
Read
Update
Delete

*/

$serverHost="http://localhost/phplessons2/05_CRUD/product.php?id=";
error_reporting(E_ALL);
$messeges = array();
$tableHTML="<table>";

//TODO Validate values

$link = mysqli_connect("localhost", "root", "root", "store");
mysqli_set_charset($link,"utf8");	
if(mysqli_connect_errno($link)==NULL)
{

	$sql = "SELECT * FROM products";
	

	$result = mysqli_query($link,$sql);
	if($result!=false)
	{	

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			
				$tableHTML.="<tr>";

				$tableHTML.="<td><a href='".$serverHost.$row["prodID"]."'>".$row["prodTitle"]."</a></td>";
				$tableHTML.="<td>".$row["prodPrice"]."</td>";
				$tableHTML.="</tr>";

		}


	}

	mysqli_close();
}	

$tableHTML.="</table>";


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $tableHTML; ?>	
</body>
</html>