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


	/* Procedure */
	$myHTCFirm = "HTC";
	$myHTCZangvac="25";
	$myHTCModel="Desire";
	getPhoneInfo($myHTCFirm,$myHTCZangvac,$myHTCModel);

	$mySamsungFirm = "Samsung";
	$mySamsungZangvac="15";
	$mySamsungModel="Galaxy";
	getPhoneInfo($mySamsungFirm,$mySamsungZangvac,$mySamsungModel);

	function getPhoneInfo($firm,$zangv,$model)
	{
		echo $firm;	
		echo $zangv;
		echo $model;
	}

?>