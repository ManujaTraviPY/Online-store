<?php session_start();
if(isset($_SESSION["admin"]))
{
	 
}
else
{
	header('Location: login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="stylesheet" href="#" type="text/css">
    
      <style>
         nav{
  background: #000000;
  display: flex;
  justify-content:space-around;
  align-items: center;
  color: #F3C693;
}
.nav-links {
    display: flex;
    justify-content:space-around;
    width: 50%;
    text-transform: uppercase;
}
.nav-links a{
  display: block;
   text-transform: uppercase;
   text-decoration: none;
   color: #FFFFFF;
  border-bottom:2px solid transparent;
  transition:0.5s ease;
  transform: translateX(0%);
}
.nav-links a:hover {
  color:#635A20;
  letter-spacing: 5px;
}

.active {
}

		  
    </style>
</head>

<body>
	
 <nav>
  <div class="logo">
    <h4>Art of Fashion</h4>
  </div>
  <ul class="nav-links"> 
			<a href="homepage.html">Home</a>
			<a href="store.php">Store</a>
			<a href="#">Contact Us</a>
			<a href="aboutus.php">About</a>
			<a href="login.php">Sign Up</a>
	 <a href="#" aria-pressed="My Cart" title="My Cart">Cart</a>
  </ul>
</nav>

<div align="right"><form method="get" action="">
       <input type="text" name="txtSearch" id="txtSearch" placeholder="search"> <input type="submit" name="btnSubmit" value="Search">
    </form>
    </div>
<?php
	$con = mysqli_connect("localhost","root","","store_database","3308");
	
	 if(!$con) 
	 {
		die("Cannot connect with DB server"); 
	 }
	 
	 $sql = "SELECT * FROM `addtostore`";
	 
	 $result = mysqli_query($con,$sql);	
	
	 if(mysqli_num_rows($result)>0)
	 {
		while($row = mysqli_fetch_assoc($result)) 
		{
			
?>

  <div class="row">
  <div class="column">
    <div class="card">
	  <p></p>
      <img src="<?php echo $row["imagePath"]?>"  style="width:100%" >
      <div class="container">
        <h2><?php echo $row["productName"]?></h2>        
        <p><?php echo $row["description"]?></p>
      </div>
    </div>
</div>
<?php
		}
	 }		
	mysqli_close($con);		
?>
</body>
</html>