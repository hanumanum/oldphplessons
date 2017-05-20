<html>
<head>
	<meta charset="utf-8">
</head>
<?php
class Siqul{
	public $radius;

	public function __construct($r){
		$this->radius=$r;
	}

	public function getSquare1(){
   		return pi()*pow($this->radius,2);
   	}
}
class Cylinder extends Siqul{
   		public $radius;
   		public $height;

   		public function __construct($r,$h){
		$this->radius=$r;
		$this->height=$h;
		}

		public function getCapacity(){
   	   			return (parent::getSquare1())*($this->height);
   		}
   		public function getKoxm(){
   			return sqrt(pow($this->radius,2)+pow($this->height,2));
   		}
}
class Makeres extends Cylinder{

	public $radius;
   	public $height;

   		public function __construct($r,$h){
		$this->radius=$r;
		$this->height=$h;
		}

	public function getSquare(){
   		return pi()*($this->radius)*(parent::getKoxm());
   	}	
}
class Gumar extends Makeres{

	public $radius;
   	public $height;

   		public function __construct($r,$h){
		$this->radius=$r;
		$this->height=$h;
		}

	public function getSquare(){
   		return (parent::getSquare())+(parent::getSquare1());
   	}
}
$a = new Siqul(3);
	echo"Կոնի հիմքի մակերեսը հավասար է  ". $a->getSquare1();
	echo"<br>";
$a = new Cylinder(3,5);
	echo"Կոնի ծավալը հավասար է  ". $a->getCapacity();
	echo"<br>";
$a = new Cylinder(3,5);
	echo"Կոնի կողմի երկարությունր հավասար է  ". $a->getKoxm();
	echo"<br>";
$a = new Makeres(3,5);
	echo"Կոնի կողմերի մակերեսը հավասար է  ". $a-> getSquare();
	echo"<br>";
$a = new Gumar(3,5);
	echo"Կոնի ընդհանուր մակերեսը հավասար է  ". $a-> getSquare();
	echo"<br>";
?>