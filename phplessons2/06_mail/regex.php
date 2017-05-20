<?php
error_reporting(E_ALL);

$a = "a";
for ($i = 1; $i <= 5; $i++) {
  ${$a.$i} = "value".$i;
}


for ($i = 1; $i <= 5; $i++) {
  echo ${$a.$i};
  echo "<br>";
}



/*
$email = "asdf@asdf.ru"
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format"; 
}
*/

?>