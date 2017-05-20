<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$anaun = "Gago";
	$azganun = "Magoyan";

	//ՄԱՍ 1 ՓՈՓՈԽԱԿԱՆՆԵՐ

	//Տողերի միացումը (կոնկատենացիան) արվում է կետով, ոչ թե + նշանով
	$lriv = $anaun." ".$azganun."<br>";
	echo $lriv;

	//Երկուսանոց չակերտների ներսում գրված փոփոխականը փոխարինվում է իր արժեքով
	$a = "բարև $anaun";
	echo $a;
	echo "<br>";

	//մեկանոց չակերտների մեջ գրված փոփոխականը չի փոխարինվում իր արժեքով
	$b = 'բարև $anaun';
	echo $b;
	echo "<br>";
	
	$cars = [1,"BMW",false];	
	echo "<pre>";
	var_dump($cars);
	echo "</pre>";

	//ՄԱՍ 2 ՓՈՓՈԽԱԿԱՆՆԵՐ Գլոբալ
	//PHP-ում գլոբալ փոփոխականը օգտագործելիս պիտի արվի հատուկ նշում
	function myfunction($a)
	{
		global $b;
		return 	$a;
	}


	//ՄԱՍ 3 ՓՈՓՈԽԱԿԱՆՆԵՐ ստատիկ
	function myOtherFunction($a)
	{
		static $b; //Ստատիկ փոփոխականը իր արժեքով չի վերանում ֆունկցիայի աշխատանքի ավարտից հետո 
		$c = $a;
		return $a;
	}


	//ՄԱՍ 4 հաստատուններ, չփոփոխվող փոփոխականներ ։)
	define(inchvor, "text", false); //false քեյս֊սենսիթիվությունը	
	//inchvor="mext";
 	echo inchvor;
 	echo "<br>";
 	echo IncHvor;



?>


</body>
</html>
