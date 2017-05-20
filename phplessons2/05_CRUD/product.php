<?php
/*Create
Read
Update
Delete

*/


error_reporting(E_ALL);
$messeges = array();
$tableHTML="<table>";
$errors = array();

if($_SERVER["REQUEST_METHOD"]=="GET" && (int)$_GET["id"]>0)
{

	$id = (int)$_GET["id"]; 

	//TODO Validate values

	$link = mysqli_connect("localhost", "root", "root", "store");
	mysqli_set_charset($link,"utf8");	
	if(mysqli_connect_errno($link)==NULL)
	{

		$sql = "SELECT * 
				FROM products as p
				INNER JOIN categories AS c on c.catID = p.prodCat  
				WHERE prodID=$id";
		

		$result = mysqli_query($link,$sql);
		if($result!=false)
		{	

			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			if(!$row)
			{
				array_push($errors, "Այս համարով ապրաքն չկա");
			}
			else
			{
				
				$tableHTML.="<h1>".$row["prodTitle"]."</h1>";
				$tableHTML.="<h2>".$row["prodPrice"]." դ․ </h2>";
				$tableHTML.="<p>".$row["prodDescr"]."</p>";
				$tableHTML.="<span>".$row["catDescr"]."</span>";

				/*
				foreach ($row as $key => $value) {
							$tableHTML.="<tr>";
								$tableHTML.="<td>$key</td>";
								$tableHTML.="<td>$value</td>";
							$tableHTML.="</tr>";
						}
				*/				
			}
			
			


		}

		mysqli_close();
	}	

	$tableHTML.="</table>";


}
else
{
	array_push($errors,"Էջը կանչված է առանց արգումենտի");
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(count($errors)>0)
		{
			foreach ($errors as $err) {
				echo $err;
			}
		}

		echo $tableHTML;

	?>	
</body>
</html>