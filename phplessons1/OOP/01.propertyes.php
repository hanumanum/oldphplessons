<?php

	class Phone
	{
		public $firm;
		public $zangvac;
		public $model;	
	} 

	$myHTC = new Phone();
	$myHTC->firm="HTC";
	$myHTC->zangvac=25;
	$myHTC->model="Desire";


	$mySamsung = new Phone();
	$mySamsung->firm="Samsung";
	$mySamsung->zangvac=15;
	$mySamsung->model="Galaxy";


	echo $myHTC->firm;	
	echo "<br>";
	echo $mySamsung->firm;


	echo "<pre>";
	var_dump($myHTC);
	echo "</pre>";	

	echo "<pre>";
	var_dump($mySamsung);
	echo "</pre>";

?>