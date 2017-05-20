<?php
class MyClass{
	
	public $a;
	private $b;
	protected $c;
	public function setB($b1)
	{
		$this->b=$b1;
	}
	protected function esimInch()
	{
		echo "եսիմինչ";
	}
}
$d = new MyClass();
$d->a; //Կարող եմ դիմել public է
//$d->b; //չեմ կարող դիմել private է
//$d->c; //չեմ կարող դիմել protected  է
//$d->esimInch(); //չի կանչվի որովհետև protected է 
class MyOther extends MyClass{
	
	public function __construct()
	{
		$this->a="52";  //Հասանելի է, որովհետև ծնողական կլասում public է
		$this->b="5552"; //Սա արդեն ուրիշ b հատկություն է, տես vardump֊ը
		$this->c="441"; //Հասանելի է, որովհետև ծնողական կլասում protected է
		$this->esimInch(); //Հասանելի է, որովհետև ծնողական կլասում protected է
	}
}
$z= new MyOther();
echo "<pre>";
var_dump($z);
echo "</pre>";