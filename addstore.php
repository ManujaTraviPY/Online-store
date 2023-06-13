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
    <link rel="stylesheet" href="css/addstorestyle.css" type="text/css">
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
          
    <div class="form-style-5">
<form action="addstore.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend><span class="number">1</span> Item Info</legend>
<p>
  <input type="text" name="txtTitle" placeholder="Product Name *" required>
  <textarea name="txtDescription" placeholder="Describe about the product"></textarea>
  <input type="file" name="imageFile" placeholder="Upload a Picture" required>
  Category  <select name="lstCategory">
    <option value="Men's Shorts">Men's Shorts</option>
    <option value="Men's Hoodies">Men's Hoodies</option>
    <option value="Men's Joggers">Men's Joggers</option>
     <option value="Men's Tee Shirts & Tops">Men's Tee Shirts and Tops</option>
     <option value="Women's Tank Tops">Women's Tank Tops</option>
    <option value="Women's shorts">Women's shorts</option>
	<option value="Women's Tee's">Women's Tee's</option>
	<option value="Accessories">Accessories</option>
    </select>
</p>


      
</fieldset>
<fieldset>
 <label for="chkPublish">ADD TO STORE : 
  <input type="checkbox" name="chkPublish">
</label>
</fieldset>
    
<p>
  <input type="submit" value="Add Post"  name ="btnSubmit"/>
</p>
<?php
	if(isset($_POST["btnSubmit"]))
 {
	  $productname = $_POST["txtTitle"];
	  $description = $_POST["txtDescription"];
	  $category = $_POST["lstCategory"];
	
	  $image = "uploads/".basename($_FILES["imageFile"]["name"]);
	  move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
	
		if(isset($_POST["chkPublish"]))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		
	$con = mysqli_connect("localhost","root","","store_database","3308");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "INSERT INTO `addtostore` (`advertisementID`, `productName`, `description`, `imagePath`, `category`) VALUES (NULL, '".$productname."', '".$description."', '".$image."', '".$category."');";
	  
	 if(mysqli_query($con,$sql))	
	 {
		 echo "Item added sucessfully !!!!";
	 }
	else
	{
		 echo "Oops !! Something is wrong , Please select the file again";
	}
 }
?>
</form>
</div>
</body>
</html>