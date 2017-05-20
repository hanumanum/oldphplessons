<?php
	
	class People
	{
		final public function think()
		{
			echo "Մտածեց";
		}


	}


	class Child extends People
	{
		public function think()
		{
			echo "Մտածել";
		}
	}


?>