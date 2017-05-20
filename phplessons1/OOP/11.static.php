<?php
  class statTest 
  {
  	public $a;
  	public static $stat;

  	function __construct()
  	{
  		++self::$stat;
  		$this->getCount();
  	}

  	public function getCount()
  	{
  		echo "Այս պահին արդեն կա ".self::$stat." հատ ".__CLASS__." տիպի օբյեկտ";
  		echo "<br>";
  	}
  }



  $st1 = new statTest();

  $st2 = new statTest();

  $st3 = new statTest();


?>