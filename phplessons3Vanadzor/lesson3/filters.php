<?php 
	error_reporting(E_ALL);
	//phpinfo();
	ini_set('display_errors', 'Off');
	

?>
	

<?php
	$str = "<h1>Hello World!</h1>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr;
?>	


<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
echo "<br>";
?>

<?php
$ip = "192.195.77.80";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>


<html>
	<head> </head>
	<body>
		<form action="" method="get">
			&lt;h1&gt;asdfds&lt;/h1&gt;

			<input placeholder="text" type="text" name="mytext">
			<input placeholder="email" type="email" name="email">
			<input placeholder="number" type="number" name="number">			
			<input type="submit" name="go">
		</form>
	</body>
</html>

<?php

/*
Հարց ու պատասխան


ֆիլտեր http://www.w3schools.com/php/php_filter.asp http://www.w3schools.com/php/php_filter_advanced.asp

1․ Էռռոռների և վոռնինգների տեսակները, w3school-ով
	էռռոռների տեսակներ
	trigger_error()
	error reporting սքրիփթի մեջ և սերվերի վրա 
	http://php.net/manual/en/function.error-reporting.php
	error_log ֆայլը և error_log() ֆունկցիան

2. կատարում են սխալների մշակման համար նախատեսված վարժությունները


Մոտավորապես w3school-ով անում եմ վալիդացիա մի քանի դաշտի համար ՝ անուն, էլ․փոստ, տարիք, գաղտնաբառ։ Կան պարտադիր դաշտեր և ոչ պարտադիր, գաղտնաբառը ստուգում եմ, որ ուժեղ գաղնտաբառ լինի:

*/

?>