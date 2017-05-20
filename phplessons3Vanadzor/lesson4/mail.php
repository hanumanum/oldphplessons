<?php
$to = "a.kolyan@gratun.am";
$subject = "Բարև";
$message = "լալա տաբապալա";
$headers = "From: webmaster@example.com" . "\r\n" .
			"CC: somebodyelse@example.com" . "\r\n" .
			"CC: esimum@example.com";

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message);



?>