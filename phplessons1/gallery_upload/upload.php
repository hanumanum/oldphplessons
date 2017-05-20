<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$validExt=["jpg","jpeg","tiff","gif","png"];
	if(isset($_POST["submit"]) && $_POST["submit"]!="") 
	{
		$uploadDir = "pictures/";
		if($_FILES["myfile"]["size"]!=0 && !$_FILES["myfile"]["error"])
		{
			$targetFile = $uploadDir.$_FILES["myfile"]["name"];
			$path = pathinfo($targetFile);
			if(in_array($path["extension"], $validExt))
			{
				
				$targetFile = $path["dirname"]."/";
				$targetFile.=$path["filename"]."_";
				$targetFile.=time().".".$path["extension"];
				move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile);
				echo "Ձեր ֆայլը բարեհաջող վերբեռնվեց";

			}
			else
			{
				echo "ՍԽԱԼ։ Անթույլատելի ֆայլի ընդլայնում";
			}
		}
		//http://php.net/manual/en/features.file-upload.errors.php
		else if($_FILES["myfile"]["error"]==1)
		{
			echo "ՍԽԱԼ։ Ֆայլը չպիտի գերազանցի 2M";	
		}
		else
		{
			echo "ՍԽԱԼ։ Ֆայլը չի ընտրվել";
		}

	}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="Վերբեռնել">
	</form>

</body>
</html>