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
		//Թույլ չի վերագրել (override) think ֆունկցիան
		//որովհետև ծնող կլասում այն նշված է որպես final 
		public function think()
		{
			echo "Մտածել";
		}
	
	}

	$p = new People();
	$p->think();


?>