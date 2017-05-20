<?php
	$cont=10;

	$link = mysqli_connect("localhost","root","root","trayning");

	$sqlC="SELECT COUNT(ContactID) AS countt
		  FROM EmployeeContacts";
	$result=mysqli_query($link, $sqlC);	  
	$count=mysqli_fetch_assoc($result)["countt"];

	$count = ceil($count/$cont);

	if(!isset($_GET["part"])){
		  $sqlCont="SELECT ContactID, ContactInfo
		  FROM EmployeeContacts LIMIT 0,$cont"; 
	}
	else{
		$p = $_GET["part"];
		$st=$cont*($p-1);
		$end=$cont*$p;
		
		$sqlCont="SELECT ContactID, ContactInfo
		FROM EmployeeContacts LIMIT $st,$cont"; 
	}	  

	$result2 = mysqli_query($link,$sqlCont);
	echo mysqli_error($link);
	while ($row=mysqli_fetch_assoc($result2)) {
		echo $row["ContactInfo"];
		echo "<br>";
	}

	echo "<a href='index.php'>1</a>";
	echo "<span> ; <span>";
	for($i=2; $i<=$count; $i++){
		echo "<a href='index.php?part=$i'>$i</a>";
		echo "<span> ; <span>";
	}

?>