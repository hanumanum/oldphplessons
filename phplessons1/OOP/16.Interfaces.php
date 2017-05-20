<?php

	
	class Gadget
	{
		public $name;
		public $model;
		
		function __construct($name,$model)
		{
			$this->name=$name;
			$this->model=$model;
		}
	}

	interface iHeraxos
	{
		public function call($number);
	}


	interface iComputer
	{
		public function compute($data);

	}

	interface iPhoto
	{
		public function takePhoto();
	}


	class MechPhoto implements iPhoto 
	{	

		public $name;
		public $model;

		function takePhoto()
		{
			echo "Ես " .$this->model. " եմ նկարում եմ ժապավենի վրա<br>";
		}

		function __construct($name,$model)
		{
			$this->name=$name;
			$this->model=$model;
		}
	}

	class DigitalPhoto extends Gadget implements iComputer,iPhoto
	{
		function compute($data)
		{	
			echo "Ես " .$this->model. " հաշվարկում եմ եքսպոզիցիան<br>";
		}

		function takePhoto()
		{
			echo "Ես " .$this->model. " եմ նկարում եմ թվային<br>";
		}
	}

	

	class SmartPhone extends Gadget implements iComputer,iPhoto,iHeraxos
	{
		function compute($data)
		{	
			echo "Ես " .$this->model. " հաշվարկում եմ<br>";
		}

		function takePhoto()
		{
			echo "Ես " .$this->model. " եմ նկարում եմ թվային<br>";
		}

		function call($number)
		{
			echo "Ես " .$this->model. " զանգում եմ $number համարով<br>";
		}
	}



	$zenit = new MechPhoto("Մեխանիկական ապարատ","Zenit E");
	$zenit->takePhoto();

	$fed = new MechPhoto("Մեխանիկական ապարատ","Fed");
	$fed->takePhoto();

	$canon = new DigitalPhoto("Թվային խցիկ","CANON 5D Mark II");
	$canon->compute("Թույլ լույս");
	$canon->takePhoto();

	$HTC = new SmartPhone("Խելախոս","HTC Desire C 300");
	$HTC->compute("Ինչ որ տվյալներ");
	$HTC->takePhoto();
	$HTC->call(2025565985);

















?>