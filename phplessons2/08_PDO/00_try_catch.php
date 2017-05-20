<?php

	try{
		$hostname = "localhos"; //այստեղ սխալ հոսթ է գրված, այդ պատճառով ծրագիրը կաշխատի catch բլոկում
		//նույնը կկատարվի try բլոկում առաջացած ցանկացած սխալի դեպքում 
		$username = "root";
		$password = "root";
		$db = new PDO("mysql:host=$hostname;dbname=lesson", $username, $password);
		   
		$sql = "SELECT * FROM EmployeeContacts";


		foreach ($db->query($sql) as $row)
	    {

	    	echo $row["ContactInfo"]."<br>";
	    }

		    $db = null;

		
	} 
	catch(Exception $e){
		echo "<pre>";
			var_dump($e);
			echo "</pre>";	
		echo "asdf";

	}	


?>