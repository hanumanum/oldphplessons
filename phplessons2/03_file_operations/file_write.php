<?php
// Լրիվ ջնում է և գրում սկզբից
$myfile = fopen("testfile.txt", "w");

fwrite($myfile," gago");

fclose($myfile);



// Ավելացնելով վերջում
$myfile = fopen("testfile.txt", "a");

fwrite($myfile," gago");

fclose($myfile);


?>