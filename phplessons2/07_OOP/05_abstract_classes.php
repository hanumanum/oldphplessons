<?php
abstract class MyClass{
	abstract function getAylinch();

	function getEsiminch()
	{
		return "esim<br>";
	}

}


class InheritMyClass1 extends MyClass{
	function getAylinch()
	{
		return "aylinch<br>";
	}	
}


$m = new InheritMyClass1();
echo $m->getAylinch();
echo $m->getEsiminch();






?>