<?php

class Restangle
{
	//Մետրով
	public $w;
	public $h;
	public $par;
	public $sqv;	

	public function __construct($ww,$hh)
	{

		echo "Բարև Աշխարհ, ես նոր ".__CLASS__." տիպի օբյեկտ եմ";
		$this->w = $ww;
		$this->h = $hh;
		$this->sqv =$this->w*$this->h;
		$this->par = (($this->w+$this->h)*2);
	}

	public function __destruct()
	{
		echo "Ես գնացի էն աշխարհ";
	}

}


$rest = new Restangle(255,100);

echo "<pre>";
var_dump($rest);
echo "</pre>";
echo "Ֆայլի վերջը<br>";
?>

