<?php
	$allowedExt = array("jpg","jpeg","png","tiff","gif");
	$errors = array();

	if(isset($_FILES) && count($_FILES)>0)
	{

			$_FILES["myfile"]["tmp_name"];
			$name = $_FILES["myfile"]["name"];
			$target_file = "uploads/$name";
			

			$patInf = pathinfo($target_file);

			if(in_array($patInf["extension"], $allowedExt))
			{
				$target_file = $patInf["dirname"]."/".$patInf["filename"].time().".".$patInf["extension"];
				move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

			}
			else
			{
				array_push($errors, "Ընդլայնումը չի համապատասխանաում ․․․․․");				

			} 

			
			
				
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload test</title>
</head>
<body>
	<form name='upload' action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" value = "Վերբեռնել">
	</form>
	<?php
		if(count($errors)>0)
		{
			printErrors();
		}

	?>


	<?php

		$files = scandir("uploads/");
		
		foreach($files as $file)
		{

			if(is_file("uploads/".$file))
			{
				echo "<img src='uploads/$file' heigth='200' width='150'>";
			}
		}

		?>






</body>
</html>



<?php

function printErrors()
{
	global $errors;
	foreach ($errors as $value) {
		echo "<p> $value </p>";
	}

}



?>