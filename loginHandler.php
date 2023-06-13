<?php session_start();
 if(isset($_POST["submit-btn"]))
 {
	 $userName = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 
	 $con = mysqli_connect("localhost","root","","store_database","3308");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "SELECT * FROM `user` WHERE `email` = '".$userName."' and `password` = '".$password."'";
	 $sql1 = "SELECT * FROM `admin` WHERE `email` = '".$userName."' AND `password` = '".$password."'";
	 
	 $result = mysqli_query($con,$sql);	 
	 $result1 = mysqli_query($con,$sql1);	
	 
	 if(mysqli_num_rows($result)>0)
	 {
		 //Create session 
		 $_SESSION["userName"] = $userName;
		 header('Location:userview.php');
	 }
	 else if (mysqli_num_rows($result1)>0)
	 {
		 $_SESSION["admin"] = $userName;
		  header('Location:store.php');
	 } 
	 else
	 {
		 header('Location:login.php');
	 }
 }
?>