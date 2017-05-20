<?php

class Restangle
{
	//Մետրով
	public $w;
	public $h;

	public function getSquare()
	{
		return "Մակերեսը = ".($this->w*$this->h);
	}

	public function getPerimeter()
	{
		return "Պարագիծը = ".(($this->w+$this->h)*2);
	}

	public function convertMisurement($l)
	{
		if(mb_strpos($l,"կմ"))
		{
			return floatval($l)*1000;
		}
		elseif(mb_strpos($l,"սմ"))
		{
			return floatval($l)*0.01;
		}
		elseif (mb_strpos($l,"մ")) 
		{
		 	return floatval($l)*1;	
		} 

	}

	public function setW($l)
	{
		$this->w = $this->convertMisurement($l);
 	}

	public function setH($b)
	{
		$this->h = $this->convertMisurement($b);	
	}
}


$rest = new Restangle();
$rest->setW("25կմ");
$rest->setH("100սմ");

echo "<pre>";
var_dump($rest);
echo "</pre>";

echo $rest->getSquare();
echo $rest->getPerimeter();


?>

