<?php
$allowedExt = ['jpg','jpeg','png','gif','JPG','JPEG'];
$errors="";

if(count($_FILES))
{
	 $ext = pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);

	 //DOCS in_array ստուգում է, արդյոք կա՞ արժեքը զանգվածի մեջ
	 if(in_array($ext, $allowedExt)){
		$target_file = "uploads/".time().".".$ext;
	 	move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
	 }
	 else{
	 	$errors = "Ֆայլը նկար չի";
	 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $errors; ?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" value="Upload">
	</form>
</body>
</html>