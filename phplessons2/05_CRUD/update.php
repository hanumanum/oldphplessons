<?php
/*Create
Read
Update
Delete

*/
error_reporting(E_ALL);
$messeges = array();
$errors = array();

$link = mysqli_connect("localhost", "root", "root", "store");
mysqli_set_charset($link,"utf8");	

if($_SERVER["REQUEST_METHOD"]=="POST" && (int)$_POST["prodID"]>0)
{
	$prID = $_POST["prodID"];
	$updSQL="UPDATE products";
	$updSQL.= " SET ";
	  
	$updSQL.=" prodTitle='".$_POST["prodTitle"]."',";
	$updSQL.=" prodPrice='".$_POST["prodPrice"]."',";
	$updSQL.=" prodDescr='".$_POST["prodDescr"]."',";
	$updSQL.=" prodCat=".$_POST["prodCat"];
	  
	$updSQL.= " WHERE prodID = $prID";	

	//echo $updSQL;

	mysqli_query($link,$updSQL);
	//mysqli_errno($link);
}




if(($_SERVER["REQUEST_METHOD"]=="GET" && (int)$_GET["id"]>0) || (int)$_POST["prodID"]>0)
{
	$id = (int)$_GET["id"]; 
	if(!$id)
	{
		$id = (int)$_POST["id"];
	}
	//TODO Validate values

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
				
			}
		}
		
		
	}	

	


}
else
{
	array_push($errors,"Էջը կանչված է առանց արգումենտի");
}

mysqli_close();
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

	?>
	
	<form action="" method="POST">
		<input type="hidden" name="prodID" value="<?=$row["prodID"]; ?>">
		Ապրանքի վերնագիրը՝ <br><input type="text" name="prodTitle" value="<?=$row["prodTitle"]; ?>"><br>
		Ապրանքի գինը՝ <br><input type="text" name="prodPrice" value="<?=$row["prodPrice"]; ?>"><br>
		Ապրանքի նկարագրությունը՝ <br><textarea name="prodDescr"><?=$row["prodDescr"]; ?></textarea><br>
		Ապրանքի բաժինը ՝ 
		<?php generateProductCatSelect($row["prodCat"]); ?>
		<br>
		<input type="submit" value="Թարմացնել" name="update">
	</form>


</body>
</html>


<?php

	function generateProductCatSelect($id)
	{
		
		echo '<select name="prodCat">';
		$catsArray = array("1"=>"Կեր","2"=>"խմիչք");
		
		foreach ($catsArray as $key => $value) {
			$s = "";
			if($key==$id)
			{
				$s="selected";	
			}
			echo "<option value='$key' $s>$value</option>";
		}
		echo "</select>";

	} 

?>


