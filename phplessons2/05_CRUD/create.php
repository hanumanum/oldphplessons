<?php
/*Create
Read
Update
Delete

*/


error_reporting(E_ALL);
$messeges = array();


if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$pT=$_POST["prodTitle"];
	$pP=$_POST["prodPrice"];
	$pD=$_POST["prodDescr"];
	$pC=$_POST["prodCat"];


	$pT = sanitarization($pT);
	$pP = sanitarization($pP);
	$pD = sanitarization($pD);
	$pC = sanitarization($pC);


	//TODO Validate values

	$link = mysqli_connect("localhost", "root", "root", "store");
	mysqli_set_charset($link,"utf8");	
	if(mysqli_connect_errno($link)==NULL)
	{

		$sql = "INSERT INTO products (prodTitle,prodPrice,prodDescr,prodCat) VALUES ('$pT','$pP','$pD','$pC')";
		

		if(mysqli_query($link,$sql)!=false)
		{
			array_push($messeges,"Սաղ լավա");

		}

		mysqli_close();
	}	



}


function sanitarization($pT)
{
	//TODO Implement Later
	return $pT;	
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="" method="POST">
		Ապրանքի վերնագիրը՝ <br><input type="text" name="prodTitle"><br>
		Ապրանքի գինը՝ <br><input type="text" name="prodPrice"><br>
		Ապրանքի նկարագրությունը՝ <br><textarea name="prodDescr"></textarea><br>
		Ապրանքի բաժինը ՝ 
		<select name="prodCat">
			<option value="1">Կեր</option>
			<option value="2">Խմիչք</option>
		</select><br>
		<input type="submit" value="Ստեղծել" name="create">
	</form>
	<?php

		if(count($messeges)>0)
		{
			foreach ($messeges as $value) {
					echo $value."<br>";
				}
		}

	?>
</body>
</html>