<?php

	$root = "/var/www/das/lesson3/layout/";
	$direcotory = scandir($root);
	
	foreach ($direcotory as $key => $value) {
		
		if(is_dir($root.$value)) //ստուգում է, դիրեկտորիա լինելը
		{
			echo "direcotory ".$value;
		}
		elseif(is_file($root.$value)) //ստուգում է, ֆայլ լինելը
		{
			echo "file ".$value;	
		}
		
		echo "<br>";
		
	}
?>