<?php
	class Animal
	{
	  private $type;
	  public $age;

	  public function __construct($t,$a)
	  {
	      $this->type=$t;
	      $this->age=$a;

	      echo 'The class "', __CLASS__, '" was initiated!<br />';
	  }
	 
	  public function __destruct()
	  {
	      echo 'The class "', __CLASS__, '" was destroyed.<br />';
	  }
	 
	  public function breath()
	  {
	  	echo $type." Շնչեց<br>";
	  }

	  public function eath()
	  {
	    echo $type." Կերավ<br>";
	  }

	}


	class Bird extends Animal{
		public $wingLenght;

		public function fly()
		{
			echo $type." Թռավ ".$this->wingLenght." մետրանոց թեվերով<br>";	
		}
	}


	class MarinAnimal extends Animal{
		public $volume;
		
		public function swim()
		{
			echo $type." Լողաց";	
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

	$kalibri = new Bird("Կալիբլի",25);
	$kalibri->wingLenght = 0.25;
	$kalibri->breath();
	$kalibri->eath();
	$kalibri->fly();

	$dolpin = new MarinAnimal("Դելֆին",10);	
	$dolpin->volume = 1000;
	$dolpin->breath();
	$dolpin->eath();
	$dolpin->swim();


?>