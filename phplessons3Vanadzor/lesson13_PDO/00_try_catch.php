<?php
	function inverse($x) {
		if($x==0)
		{
			throw new Exception("Բաժանում զրոի", 1);
		}
		else
		{
	    	return 1/$x;
			
		}    
	}


	try{
		echo inverse(0);

	} 
	catch (Exception $e) {
		echo "!!! Սխալ կա !!!";

	}
	finally {
		echo "Ծրագիրը ավարտվեց";
	}



?>