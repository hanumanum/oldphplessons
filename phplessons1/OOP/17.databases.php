<?php
error_reporting(E_ALL & ~E_WARNING);

$DBServer = 'localhost'; // կամ 'localhost' or '192.168.1.100'
$DBUser   = 'root';
$DBPass   = 'root';
$DBName   = 'lesson';

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
$conn->set_charset("utf8"); 

// ստուգում ենք կապը
if ($conn->connect_error) {
			echo $conn->connect_error;
  
}
else
{
	echo "<br> կապը բարեհաջող ստեղծված է";
}

$title="Իմ առաջին հոդվածը";
$content="Lorem Ipsum-ը տպագրության և տպագրական արդյունաբերության համար նախատեսված մոդելային տեքստ է: Սկսած 1500-ականներից` Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունք է: Այս տեքստը ոչ միայն կարողացել է գոյատևել հինգ դարաշրջան, այլև ներառվել է էլեկտրոնային տպագրության մեջ` մնալով էապես անփոփոխ: Այն հայտնի է դարձել 1960-ականներին Lorem Ipsum բովանդակող Letraset էջերի թողարկման արդյունքում, իսկ ավելի ուշ համակարգչային տպագրության այնպիսի ծրագրերի թողարկման հետևանքով, ինչպիսին է Aldus PageMaker-ը, որը ներառում է Lorem Ipsum-ի տարատեսակներ:";

$sql = "INSERT INTO articles (title,content) 
		VALUES('$title','$content')";


//echo $sql;

if($conn->query($sql) === false) 
{
   echo $conn->error;
} 
else
{
   echo "<br>Բարեհաջող գրվեց բազայում";	
  /* $last_inserted_id = $conn->insert_id;
  $affected_rows = $conn->affected_rows; */
}






?>