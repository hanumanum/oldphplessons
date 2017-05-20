<?php
	require_once("functions.php");
	if(!isLoggedIn())
	{
		redirect();
	}
	if(isset($_GET["id"]) && (int)$_GET["id"]>=0)	
	{
	
		$id = $_GET["id"];
	
		require_once("../config.php");

		$sql = "DELETE FROM blog WHERE id=$id";


        if(mysqli_connect_errno($link) == NULL)
        {
        	mysqli_query($link,$sql);
        }

        mysqli_close($link);            	
	}	

header('Location: index.php');

?>