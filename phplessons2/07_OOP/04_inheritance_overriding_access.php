<?php
	//Այտեղ հատուկ սխալ է թույլ տրված, դումում եմ ծնողի private մեթոդին wingLenght 
	class Animal
	{
	  private $type;
	  public $age;

	  public function __construct($t,$a)
	  {
	      $this->type=$t;
	      $this->age=$a;
	      echo "Սարքվեց<br>";
	  }
	 
 
	  public function move()
	  {
	  	echo $type." Շարժվեց<br>"; 
	  }

	
	}


	class Bird extends Animal{
		public $wingLenght;
		private $age;

		public function __construct($t,$a,$w)
		{
			parent::__construct($t,$a);
			$this->wingLenght=$w;
		}

	}


	/*
	$dog = new Animal("Շուն",25);
	echo "<pre>";
	var_dump($dog);
	echo "</pre>";

	$dog->breath();
	$dog->eath();
	*/

	$kalibri = new Bird("Կալիբլի",25,5);
	echo "<pre>";
	var_dump($kalibri);
	echo "</pre>";


/*
	$kalibri = new Bird("Կալիբլի",25);
	$kalibri->wingLenght = 0.25;
	$kalibri->breath();
	$kalibri->eath();
	$kalibri->move();

	$dolpin = new MarinAnimal("Դելֆին",10);	
	$dolpin->volume = 1000;
	$dolpin->breath();
	$dolpin->eath();
	$dolpin->move();
*/

?>