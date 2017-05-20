<?php

	session_start();
	
	if(isset($_SESSION["login"]))
	{
		echo "Ինֆորմացիա միայն լոգին եղած մարդու համար</br>";
	}

	echo "Ինֆորմացիա բոլորի համար";


?>