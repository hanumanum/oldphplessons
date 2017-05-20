<?php
	abstract class a 
	{
		public $prop1;
		public $prop2;

		abstract public function getSmth();		
	}

	//$t = new a();

	class a1 extends a
	{
		public function getSmth()
		{
			echo "asdfdas";
		}
	}

	$h = new a1();
	echo $h->getSmth();


?>