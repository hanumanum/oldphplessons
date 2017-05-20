<?php
class Triangle{
	public $side1;
	public $side2;
	public $side3;
	public $angle1;
	public $angle2;
	public $angle3;


	public function __construct($s1, $a2, $a3){
		$this->side1=$s1;
   		$this->angle2=$a2;
   		$this->angle3=$a3;
   		$this->setAngle1();
   		$this->setSide2();
   		$this->setSide3();
	}

	private function setAngle1(){
   		$this->angle1=(180-($this->angle2+$this->angle3));
   	}

   	private function setSide2(){
   		$this->side2 = $this->side1*sin($this->angle2)/sin($this->angle1);
   	}
   	private function setSide3(){
   		$this->side3 = $this->side1*sin($this->angle3)/sin($this->angle1);
   	}

	public function getSquare(){
   		return $this->side1*$this->side2*sin($this->angle3)/2;
   	}
   
   	public function getPerimeter(){
   		return ($this->side1+$this->side2+$this->side3);
   }
	public function tellAbout(){
		echo "Square".$this->getSquare();
		echo "<br>";
		echo "Perimeter".$this->getPerimeter();
		echo "<br>";
		//echo "Similar".$this->isSimilar();
		echo "<br>";
	}

	public function dump(){
		echo "<pre>";
		var_dump($this);
		echo "</pre>";
	}

	public function isSimilar($other){
		return ($this->angle1==$other->angle1 &&  $this->angle2==$other->angle2 && $this->angle3==$other->angle3);
	}
}
	$a = new Triangle(5, 45, 45);
	echo $a->tellAbout();
 	$a->dump();

 	$b = new Triangle(15, 45, 45);
 	$b->dump();
 	echo $a->isSimilar($b);

 	/*$b = new Triangle(1000, 200);
 	echo $b->tellAbout();
 	$c = new Triangle(30,610);
 	echo $c->tellAbout();*/
?>