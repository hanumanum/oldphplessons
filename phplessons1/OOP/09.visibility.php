<?php
error_reporting(E_ALL);

class MyClass1
{
	
	public $a;
	protected $prot;
	private $h;
	private $p;


	function __construct()
	{
		echo "Ստեղծվեց ".__CLASS__." տիպի օբյեկտ";
	}

	public function setP($a)
	{

		$this->p = $a;
	}

	public function setH($a)
	{

		$this->h = $a;	
	}

	public function getP()
	{
		return $this->p;		
	}

	public function getH()
	{
		
		return $this->h;		
	}

	//Սրան դրսից չի ստացվի կանչել
	private function privateText()
	{
		return 15;
	}

}


class MyClass2 extends MyClass1
{
	function __contstuct()
	{
		parent::__construct();
	}

	function printProtected()
	{
		echo $this->prot;
	}

	function setProtected($arjeq)
	{
		$this->prot = $arjeq;  	
	}

	

}



$g = new MyClass1();
$g->setP(100);
$g->setH(500);
//$g->prot;

echo "<pre>";
var_dump($g);
echo "</pre>";

$d = new MyClass2();
//$d->prot;
$d->setProtected(100);
$d->printProtected();

echo "<pre>";
var_dump($d);
echo "</pre>";


//$d->privateText();



?>