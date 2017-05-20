<!DOCTYPE html>
<html>
<head>
	<title>Փսեվսոսայտ</title>
	<style type="text/css">
		input
		{
			width: 250px;
		}
		textarea
		{
			width: 600px;
			height: 250px;

		}

	</style>
	<meta charset="utf-8">
</head>
<body>

<?php

	if(isset($_POST["save"]) && $_POST["save"]=="Պահպանել")
	{
		$title = $_POST["title"];
		$content = $_POST["content"];
		$articleID = $_POST["articleID"];
		
		$title="<h1>".$title."</h1>";
		$content="<p>".$content."</p>";

		$fileName="pages/".$articleID.".html";
		$file = fopen($fileName, "x+");

		fwrite($file, $title);
		fwrite($file, $content);

		fclose($file);

	}


?>


	<form action="" method="post">
		<input autocomplete="off" type="text" name="title" placeholder="Հոդվածի վարնագիր"><br>
		<textarea name="content" placeholder="Հոդվածի բովանդակությունը"></textarea><br>
		<input type="text" name="articleID" placeholder="Գրեք հոդվածի համարը"><br>
		<input type="submit" name="save" value="Պահպանել">
	</form>


</body>
</html>