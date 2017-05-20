<?php
abstract class MyClass{
	
	abstract function getAylinch();

	public $a;
	public $b;
	private $c;
	
	function getEsiminch()
	{
		return "esim<br>";
	}

	function getEsimAylinch()
	{
		return "ajlesim<br>";
	}
}



class MyEsimClass extends MyClass{
	function getAylinch(){
		echo "asdf";
	}

}

$a = new MyEsimClass();

$a->getAylinch();
?>