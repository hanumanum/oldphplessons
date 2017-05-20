<?php
//Տարբերակ 1
//readfile("testfile.txt");

//Տարբերակ 2
$a = fopen("testfile.txt", "r");

echo "<pre>";
var_dump($a);
echo "</pre>";

echo fgets($a);
echo "<br>";
echo fgets($a);
echo "<br>";
echo fgets($a);
echo "<br>";

//echo fread($a,filesize("testfile.txt"));
fclose($a);




//Կարդանք տող առ տող
$a = fopen("testfile.txt", "r");
// Output one line until end-of-file
while(!feof($a)) {
	//echo "asdfasdfs";
  echo fgets($a)."<br>";
}
fclose($a);




//Կարդանք տող առ տող վերածենք աղյուսակի
//implode(glue, pieces)
//explode(delimiter, string)



$a = fopen("testfile.txt", "r");
echo "<table border=1>";
// Output one line until end-of-file
while(!feof($a)) {
	//echo "asdfasdfs";
  echo "<tr><td>".implode("</td><td>",explode(",",fgets($a)))."</td></tr>";
}
echo "</table>";
fclose($a);


?>