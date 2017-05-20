<?php

class Restangle
{
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

}

	//Տպել (200х120),(1000х200),(30х610)
	$rest1 = new Restangle();
	$rest1->w=200;
	$rest1->h=120;

	$rest2 = new Restangle();
	$rest2->w=1000;
	$rest2->h=200;

	$rest3 = new Restangle();
	$rest3->w=30;
	$rest3->h=610;

	echo $rest1->getSquare();
	echo "<br>";
	echo $rest1->getPerimeter();
	echo "<br>";
	echo "<br>";
	echo $rest2->getSquare();
	echo "<br>";
	echo $rest2->getPerimeter();
	echo "<br>";
	echo "<br>";
	echo $rest3->getSquare();
	echo "<br>";
	echo $rest3->getPerimeter();
?>

