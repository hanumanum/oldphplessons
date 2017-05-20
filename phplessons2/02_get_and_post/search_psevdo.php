<?php

$a = $_GET["search"];
$data = array("Գագո մագո ․․․"
			,"ադֆդ ասդֆ սդ"
			,"․․․ադսա Գագո․․․"
			,"․․․ Մարիա ․․․"
			,"․․․ Մարիա adfasdf․․․");

if($a!="")
{


	$myNewHtml="";

	foreach ($data as $value) {
		if(strpos($value,$a)!==false)
		{
			$myNewHtml.="$value<br>";
		}
	}

}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php

if($a!="")
{
		if($myNewHtml==="")
		{
			echo "Ոչինչ չկա";
		}
		else
		{
			echo $myNewHtml;
		}


}			

		?>

	</div>
	<form action="" method="get">
		<input type="text" name="search">
		<input type="submit">
	</form>	
</body>
</html>