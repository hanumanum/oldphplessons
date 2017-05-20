<?php
	
	class Product 
	{
		public $productName;
		public $startPrice;
		private $productPrice;
		private $productProfit;
		private $VAT;

		function __construct($productName,$startPrice)
		{
			$this->productName = $productName;
			$this->startPrice = $startPrice;  
		}

		function calculatePrice($VAT)
		{
			$this->VAT = $VAT;
			$this->productPrice=($this->startPrice)*(1 + $this->VAT/100);
		}

		function getPrise()
		{
			return $this->productPrice;
		}

		function getProductInfo()
		{
			echo $this->productName."ի վաճառքի գինն է ".$this->productPrice;
			echo " եթե ԱԱՀ֊ն ".$this->VAT."% է";
			echo "<br>";
		}
	}     


$banana = new Product("Բանան",100);
$banana->calculatePrice(10);
$banana->getProductInfo();

$banana->calculatePrice(20);
$banana->getProductInfo();


$parrot = new Product("Գազար",500);
$parrot->calculatePrice(10);
$parrot->getProductInfo();

$parrot->calculatePrice(20);
$parrot->getProductInfo();





?>