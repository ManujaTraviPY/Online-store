<?php session_start();
if(isset($_SESSION["admin"]))
{
	 
}
else if (isset($_SESSION["userName"]))
{
	header('Location:userview.php');
}
else
{
	header('Location: login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="css/storepage.css">
</head>

<body>
	
	<nav>
  <div class="logo">
    <h4>Art of Fashion</h4>
  </div>
  <ul class="nav-links"> 
			<a href="homepage.html">Home</a>
			<li><a href="store.php">Store</a></li>
			<a href="#">Contact Us</a>
			<a href="aboutus.php">About</a>
			<a href="login.php">Sign Up</a>
  </ul>
</nav>
	<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td width="900"><div class="main-section">
      <div class="dashbord">
        <div class="icon-section"> <br />
          <img src="#" alt="" width="267" height="185" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="#">My Profile    <br> </a> </div>
      </div>
      <div class="dashbord dashbord-green">
        <div class="icon-section"> <br />
          <img src="#" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="addstore.php">Add to Store </a> </div>
      </div>
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="images/view.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="viewstore.php">View Store</a> </div>
      </div>
      <div class="dashbord dashbord-red">
        <div class="icon-section"> <br />
          <img src="images/edit.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="EditAdvertisements.php">Edit Store </a> </div>
      </div>
      <div class="dashbord dashbord-orange">
        <div class="icon-section"> <br />
          <img src="images/viewAll.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewAdvertisements.php">View All</a> </div>
      </div>
    </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
	
	
	
</body>
</html>