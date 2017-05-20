<?php

class Math
{
	const PI = 3.1415;
	
	public static $e = 2.71828;
	public static $fi = 0.618; 

	private static $count=0;

	public function __construct()
	{
		self::$count++;
	}

	public function setCount($a)
	{
		self::$count=$a;
	}

	public function getCount()
	{
		return self::$count; 	
	}

	public static function statEsimi()
	{
		return "52222<br>";
	}

	public static function esimStatEsim()
	{
		return "855528<br>";
	}
}

/*
echo Math::statEsimi();
echo Math::$e;
echo Math::PI;
*/

$m = new Math();
echo "<br>".$m->getCount();

$n = new Math();
echo "<br>".$n->getCount();

echo "<br>".$m->getCount();

/* սա չի աշխատի
class Math0 extends Math{
	public function statEsimi()
	{
		echo "asdfds";	
	}
}

Math0::statEsimi();
*/ 


?>