<?php
	error_reporting(E_ALL);	

	$filee = "filewithtext.txt";
	
	/* Կարդալ ֆայլից ամբողջը */
	/* 
	$myfile = fopen($filee,"r");
	
		$sz = filesize($filee);
		echo "<br>";
		echo fread($myfile,$sz);
	*/

	/*Կարդալ ֆայլից տող֊առ֊տող, 
	կամ եթե տրված է fgets-ի երկրորդ արգումենտը արգումենտի չափով 
	*/
	$myfile = fopen($filee, "r");

	echo "<ul>";

	while(!feof($myfile)) 
	{
	  echo "<li>".fgets($myfile)."</li>";
	}

	echo "</ul>";
	fclose($myfile);


	/* Նկարների գալերեա */
	$imgsList="images.list";
	$myfile = fopen($imgsList, "r");

	while(!feof($myfile))
	{
	  echo "<img src='".fgets($myfile)."' height='80px'>";
	}

	fclose($myfile);


	/*Գրել ֆայլերի մեջ */
	$fileToWrite="file.txt";
	$myfile = fopen($fileToWrite, "w");

	
	$txt = "Gago Doe\n";
	fwrite($myfile, $txt);
	
	$txt = "Mago Doe";
	fwrite($myfile, $txt);

	fclose($myfile);


	/*Ավելացնում ենք ֆայլի վերջում */
	$fileToWrite="file.txt";
	$myfile = fopen($fileToWrite, "a");
	
	$txt = "Gago Doe\n";
	fwrite($myfile, $txt);
	
	$txt = "Mago Doe";
	fwrite($myfile, $txt);

	fclose($myfile);



?>