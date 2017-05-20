<?php
	abstract class Page
	{
		protected $title;
		protected $text;
		abstract public function getData();
		abstract public function displayData();

		public function getName()
		{
			echo $title;
		} 
	}
	

	class Article extends Page
	{
		public function getData()
		{
			
			$this->title = "Անունը եկավ բազայից";
			echo "Գնացի բազայի Aricles աղյուսակից բերեցի այս տվյալները";
			echo "<br>";

		}

		public function displayData()
		{
			echo "Անունը ՝".$this->title;
			echo "<br>";
			echo "հոդվածի տեքստը ";
			echo "<br>";
		}


	}

	class Product extends Page
	{
		public function getData()
		{
			$this->title = "Անունը եկավ բազայից";
			echo "Գնացի բազայի Products աղյուսակից բերեցի այս տվյալները";
			echo "<br>";
		}

		public function displayData()
		{
			echo "Անունը ՝".$this->title;
			echo "<br>";
			echo "գինը՝ " . rand(100,200);
			echo "<br>";
		}

	}


	$page1 = new Article();
	$page1->getData();
	$page1->displayData();



	$art1 = new Product();
	$art1->getData();
	$art1->displayData();


?>