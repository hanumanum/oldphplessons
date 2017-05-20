<?php
	class Test{
		public $a;
		public $b;

		public function __construct($a,$b){
			$this->a = $a;
			$this->b = $b;
		}

		public function tail(){
			echo "<br>";
			echo "a ".$this->a;
			echo "<br>";
			echo "b".$this->b;
		}


		public function __clone(){
			
		}

	}


/*
	echo "t1<br>";
	$t1 = new Test(52,100);
	echo "<br>-----------<br>";
	var_dump($t1);
		
	$t2=$t1;
	echo "<br>-----------<br>";
	var_dump($t2);

	$t1->a=152;
	

	echo "<br>-----------<br>";
	var_dump($t1);
	echo "<br>-----------<br>";
	var_dump($t2);
*/




	echo "t1<br>";
	$t1 = new Test(52,100);
	echo "<br>-----------<br>";
	var_dump($t1);
		
	$t2 = clone $t1;
	echo "<br>-----------<br>";
	var_dump($t2);

	$t1->a=152;
	

	echo "<br>-----------<br>";
	var_dump($t1);
	echo "<br>-----------<br>";
	var_dump($t2);




?>


