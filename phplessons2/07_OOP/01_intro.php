<?php
error_reporting(E_ALL);

class Man
{
   public $name;
   public $age;

   public function getNameAndAge()
   {
   		echo $this->name." - ".$this->age."<br>";
   }

}

$gago = new Man();
$gago->name="Գագո";
$gago->age=25;
$gago->zdd=25555;
$gago->getNameAndAge();


//echo $gago->name." ՝ "․$gago->age;

$zaven = new Man();
$zaven->name="Զավեն";



echo "<pre>";
var_dump($gago);
echo "</pre>";


echo "<pre>";
var_dump($zaven);
echo "</pre>";



?>