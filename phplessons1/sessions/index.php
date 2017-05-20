<?php
session_start();

if(!isset($_SESSION["counter"])){
	$_SESSION["counter"]=1;

}
else{
	$_SESSION["counter"]++;	
}

echo "դուք այցելել եք մեզ ".$_SESSION["counter"]."֊րդ անգամ";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Մուտքի ֆորմա</title>
</head>
<body>



</body>
</html>