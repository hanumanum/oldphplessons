<?php
class Car
{
	public $model;
	public $type;
	public $price;
	public function __construct($m,$t,$p)
	{
		$this->model=$m;
		$this->type=$t;
		$this->price=$p;		
	}
}
class Gruzavik extends Car
{
	public $volume;
}
$a = new Gruzavik("Կամազ","Գռուզավիկ","50000"); 
 
class Saler
{
	public $name;
	public function __construct($n)
	{
		$this->name=$n;		
	}
	public function __toString()
	{
		return $this->name;		
	}
}
$gag = new Saler("Գագո");
class SaleCar 
{
	public $saler;
	public function sale(Saler $saler,Gruzavik $product)
	{
		echo $saler."֊ն վաճառեց";
		echo "<pre>";
		var_dump($product);
		echo "</pre>";
	}
}
$sale = new SaleCar();
$sale->sale($gag,$a);
//$a = "asdfdsa";

if($a instanceof Gruzavik)
{
	echo "Գռուզավիկ է";
	$a->volume="500";
	echo "<pre>";
	var_dump($a);
	echo "</pre>";
}


if($a instanceof Car)
{
	echo "Գռուզավիկ է";
	$a->volume="500";
	echo "<pre>";
	var_dump($a);
	echo "</pre>";
}