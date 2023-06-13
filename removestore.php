<?php session_start();
	$con = mysqli_connect("localhost","root","","store_database","3306");
	if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	$sql = "DELETE FROM `addtostore` WHERE `addtostore`.`advertisementID` = ".$_GET["id"];

	if (mysqli_query($con, $sql))
	{
		header('Location:viewstore.php');
	}
?>