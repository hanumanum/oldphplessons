<?php
	/* OOP */
	class Phone
	{
		public $firm;
		public $zangvac;
		public $model;

		public function getPhoneInfo()
		{
			echo $this->firm;
			echo "<br>";
			echo $this->zangvac;
			echo "<br>";
			echo $this->model;
		}

	} 
	
	$myHTC = new Phone();
	$myHTC->firm="HTC";
	$myHTC->zangvac=25;
	$myHTC->model="Desire";
	$myHTC->getPhoneInfo();

	$mySamsung = new Phone();
	$mySamsung->firm="Samsung";
	$mySamsung->zangvac=15;
	$mySamsung->model="Galaxy";
	$myHTC->getPhoneInfo();



?>