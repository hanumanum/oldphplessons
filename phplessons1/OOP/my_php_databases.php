<?php
error_reporting(E_ALL & ~E_WARNING);

$DBServer = "localhost"; // կամ 'localhost' or '192.168.1.100'
$DBUser   = "root";
$DBPass   = ""; // ete ka password grel $DBPass = 'root'
$DBName   = "lesson1";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$conn->set_charset("utf8"); 

// ստուգում ենք կապը

if ($conn->connect_error) 
{
		echo $conn->connect_error;
 }
else
{
	echo "<br> կապը բարեհաջող ստեղծված է";
}
/*
$sql = "CREATE table articles1 (id int(2) primary key auto_increment, name varchar(100), contents varchar(500))" ;
if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br> articles1 - ը բարեհաջող ստեղծվեց բազայում";	
}

$title2 = "Իմ առաջին հոդվածը";
$content2 = "Լիմիթը   20-բիթանոց թիվ է և =սեգմենտի երկարություն-1: Լիմիթը չափվում է բայթերով կամ 4կբ միավորներով: Այսինքն՝ սեգմենտի երկ.= (լիմիթ+1)բայթ, կամ սեգմենտի երկ.=  (լիմիթ+1)*4կբ:";
$sql = "INSERT INTO articles1 (name,contents) 
		VALUES('$title2','$content2')";

if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br> բարեհաջող գրվեց բազայում";	
}

$title2 = "Իմ երկրորդ հոդվածը";
$content2 = "Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:";
$sql = "INSERT INTO articles1 (name,contents) 
		VALUES('$title2','$content2')";

if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br> 2-րդ անգամ բարեհաջող գրվեց բազայում";	
}

$title3 = "փոխված հոդված";
$content3=" Հետևյալ  գծային հասցեների համար գտնել ֆիզիկական հասցեն, իմանալով, որ CR3=0125A000h.";

$sql="UPDATE articles1 SET name = '$title3', contents = '$content3' WHERE id =2";

if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br> 2-րդ հոդվածը բարեհաջող փոխվեց բազայում";	
}

$sql = "DELETE FROM articles1 WHERE id=3";
if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br> 3-րդը բարեհաջող ջնջվեց բազայից";	
}
*/
$sql = "Select * from articles1";
$result = $conn->query($sql);

if($result === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br>Բարեհաջող բերվեց բազայից<br><br>";	
  
 while ( $row = $result->fetch_array(MYSQLI_NUM))
  {
  echo "id = ".$row[0]." name = ".$row[1]."<br>     contents = ".$row[2]."<br>";
}
}

?>