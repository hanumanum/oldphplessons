<?php
	//Տարբերակ 1
	//readfile("names.txt");
	
	//Տարբերակ 2
	$a = fopen("names.txt", "r");
	echo "<pre>";
	var_dump($a);
	echo "</pre>";
	echo fgets($a);
	echo "<br>";
	echo fgets($a);
	echo "<br>";
	echo fgets($a);
	echo "<br>";
	//echo fread($a,filesize("names.txt"));
	fclose($a);
	
	//Կարդանք տող առ տող
	$a = fopen("names.txt", "r");
	// Output one line until end-of-file
	while(!feof($a)) {
		//echo "asdfasdfs";
	  echo fgets($a)."<br>";
	}
	fclose($a);
	
	$myfile= fopen("names.txt","r")
	//Տպում է չափը
	echo filesize("names.txt");

	echo "<ul>";
	while(!feof($myfile)) {
  		$line = fgets($myfile);
		echo "<li>".$line."</li>";
	}
	echo "</ul>";	

	fclose($myfile);

?>