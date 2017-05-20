<?php
	// Լրիվ ջնում է և գրում սկզբից
	$myfile = fopen("testfile.txt", "w");
	fwrite($myfile," Gago");
	fclose($myfile);
	
	// Ավելացնելով վերջում
	$myfile = fopen("testfile.txt", "a");
	fwrite($myfile," Zarzand");
	fclose($myfile);
?>