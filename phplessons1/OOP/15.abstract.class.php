<?php
	abstract class Shape 
	{
		public $name;
		
		abstract function getSquare();
		abstract function getPerimetr();

		function getName()
		{
			return $this->name;
		}

		function __construct($name)
		{
			$this->name=$name;
			/* echo "<br>.........................."; */
			echo "<br>Ստեղծվեց ".$this->name;
		}

		function printShapeInfo()
		{
			echo "<br>";
			echo "Անուն :".$this->name;
			echo "<br>";
			echo "Մարկերես :".$this->getSquare();
			echo "<br>";
			echo "Պարագիծ :".$this->getPerimetr();
			echo "<br>_________________________________<br>";

		}
	}

	class Circle extends Shape
	{
		public $radius;

		function __construct($name,$radius)
		{
			parent::__construct($name);
			$this->radius=$radius;
		}

		function getSquare()
		{
			return M_PI*pow($this->radius,2);
		}
		function getPerimetr()
		{
			return 2*M_PI*$this->radius;
		}

	}

	class Triangle extends Shape
	{
		public $a;
		public $b;
		public $c;

		function __construct($name,$a,$b,$c)
		{
			parent::__construct($name);
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}

		function getPerimetr()
		{
			return $this->a + $this->b + $this->c; 
		}

		function getSquare()
		{

			//Հերոնի մակերսի բանաձևով
			//http://www.mathopenref.com/heronsformula.html

			$halfP = ($this->getPerimetr())/2;
			return sqrt($halfP*($halfP-$this->a)*($halfP-$this->b)*($halfP-$this->c)); 

		}
	}


	$circle1 = new Circle("Շրջան մեծ",25);
	$circle1->printShapeInfo();

	$circle2 = new Circle("Փոքր շրջան",3);
	$circle2->printShapeInfo();


	$triangle1 = new Triangle("Ինչ որ եռանկյունի",3,4,5);
	$triangle1->printShapeInfo();

	$triangle2 = new Triangle("Մեկ այլ եռանկյունի",6,8,10);
	$triangle2->printShapeInfo();
?>