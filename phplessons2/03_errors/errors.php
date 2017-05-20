<?php
// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);




echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

//Սա Դեվելոփեռ սերվերի համար
if($_SERVER["HTTP_HOST"]=="localhost")
{
	error_reporting(E_ALL);	
}
else
{
	error_reporting(0);
}




//Սա իրական սերվերի համար, բայց դեվի կոմպից






?>