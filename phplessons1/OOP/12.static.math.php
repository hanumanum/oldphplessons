<?php

	class mySuperMath
	{
		public static $PI=3.14;

		public static function add($a,$b)
		{
			return $a+$b;
		}

		public static function sub($a,$b)
		{
			return $a-$b;
		}

	}


	//static֊ներին դիմելու համար օբյեկտ ստեղծել անհրաժեշտ չի 

	echo mySuperMath::add(20,30);
	echo "<br>";
	echo mySuperMath::sub(20,30);
	echo "<br>";
	echo mySuperMath::$PI;
	echo "<br>";
?>