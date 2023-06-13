<?php session_start();
 if(isset($_POST["submit-btn"]))
 {
	 $name = $_POST["txtName"];
	 $email = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 $contact = $_POST["txtContactNo"];
	 
	 $con = mysqli_connect("localhost","root","","store_database","3308");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "INSERT INTO `user` (`email`, `name`, `contactNo`, `password`) VALUES ('".$email."', '".$name."', '".$contact."', '".$password."');";
	 
	 mysqli_query($con, $sql);	
	
     header('Location:login.php');

 }
?>
