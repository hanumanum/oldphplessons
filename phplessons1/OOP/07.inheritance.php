<?php
class Animal
{
 	public $name;

 	public function voice()
 	{
 		echo "<br>".$this->name." ձայն Է հանում";
 	}

 	public function __construct($name)
 	{
 		$this->name = $name."ը"; 
 		echo "<br>".$this->name." ծնվեց";
 	}

 	public function __destruct()
 	{
 		echo "<br>".$this->name." սատկեց";
 	}
 }

class Cats extends Animal
{

	public function qsmsvel()
	{
		echo "<br> ".$this->name. " քսմմսվում է";
	}

	public function voice()
	{
		parent::voice();
		echo "<br> ".$this->name. " մլավում է";

	}

}

class Dogs extends Animal
{

	public $age;
	public function __construct($name,$age)
	{
		parent::__construct($name);
		$this->age=$age;	
	}

	public function pahakutyun()
	{
		echo "<br> ".$this->name. " հսկում է";
	}	

	public function voice()
	{
		echo "<br> ".$this->age." տարեկան ".$this->name. " հաչում է";
	}

}

$murka = new Cats("Մուռզիկ");
echo "<br>";
$murka->qsmsvel();
$murka->voice();

$boghar = new Dogs("Բողար",100);
$boghar->pahakutyun();
$boghar->voice();





 ?>