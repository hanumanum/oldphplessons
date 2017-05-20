<?php

interface Phone{
	function call();

}

interface Computer{

	function compute();
	function display();
	function save();
	function send();
}

interface Photo{
	function takePhoto();
	function savePhoto();

}


 class SimplePhone implements Phone
 {
	function call()
	{

	}
 } 


 class SimplePhoto implements Photo
 {

	function takePhoto()
	{

	}
	
	function savePhoto()
	{

	}

 }

 class SmartPhone implements Photo, Phone , Computer
 {
	function call()
	{

	} 	

	function compute()
	{

	}
	
	function display()
	{

	}
	
	function save()
	{

	}
	
	function send()
	{

	}


	function takePhoto()
	{

	}
	
	function savePhoto()
	{

	}


 } 



$nokia = new SmartPhone();
echo "<pre>";
var_dump($nokia);
echo "</pre>";



?>