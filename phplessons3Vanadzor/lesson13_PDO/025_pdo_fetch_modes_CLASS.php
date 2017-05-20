<?php
include ("dbconfig.php");

class EmployeContact{
	public $ContactID;
	public $EmployeeID;
	public $ContactInfo;
	public $ContactType;
	public $RegDate;
	public function getInfo()
	{
		return $this->ContactID." ".$this->EmployeeID." ".$this->ContactInfo; 
	}
}

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
   
$sql = "SELECT * FROM EmployeeContacts LIMIT 0,20";
echo "FETCH_CLASS start<br><br><br>";	
$stmt = $db->query($sql);
$db->errorInfo();
$all = $stmt->fetchAll(PDO::FETCH_CLASS,"EmployeContact");
foreach ($all as $ob){
	
	echo $ob->getInfo();
	echo "<pre>";
	var_dump($ob);
	echo "</pre>";
}
$db = null;
?>    
