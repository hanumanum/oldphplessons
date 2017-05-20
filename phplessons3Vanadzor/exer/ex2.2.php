<?php
$names = [
	"ԱԶԻԶԳՅՈՒԼ",
	"ԱՆԳԻՆ",
	"ԱՐԵՎԻԿ",
	"ԱԶՆԻՎ",
	"ԱՆԹԱՌԱՄ",
	"ԱՐԵՎՀԱՏ",
	"ԱԹԱՆԱՍԻԱ",
	"ԱՆԺԵԼԱ",
	"ԱՐԾՎԻԿ",
	"ԱԻԴԱ",
	"ԱՆԺԵԼԻԿԱ",
	"ԱՐՄԱՆՈՒՇ",
	"ԱԼԲԵՐՏԻՆԱ",
	"ԱՆԻ",
	"ԱՐՄԵՆՈՒՀԻ",
	"ԱԼԻՆԱ",
	"ԱՆՆԱ"
];

$st = $_GET["st"];
$lenght = mb_strlen($st,"utf8");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8"> 
</head>
<body>


<?php
if($st)
{
	foreach($names as $name)
	{
		if($st==mb_substr($name,0,$lenght,"utf8"))
		{
			echo $name."<br>";
		}
	}
}

?>
</body>
</html>