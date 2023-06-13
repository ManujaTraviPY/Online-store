<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
</head>

<body>
 <script>
    function checkPassword()
        {
            let pw = document.getElementById("txtPassword").value;
            let cpw = document.getElementById("txtConfimPassword").value;
            if(pw != cpw)
                {
                    alert("Password and confrim password should be the same");
                    event.preventDefault();
                }
        }
    </script>
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
	  <li><a href="login.php" class="active">Sign Up</a></li>
	  <a href="#" aria-pressed="My Cart" title="My Cart">Cart</a>
  </ul>
</nav>
	
	
    <h2>Art of Fashion Sign up form</h2>

	<div id="login-form" class="login-page">
		<div class=" form-box">
			<div class="button-box">
				<div id="btn"></div> 
				<button type= "button" onclick= "login()" class="toggle-btn">Log In</button>
				<button type= "button" onclick= "register()" class= "toggle-btn">Register</button>
		</div>	
	
		<form id= "login" class= "input-group-login" action="loginHandler.php" method="post">
			<input type="text" class="input-field" placeholder="Email" name="txtEmail" required>
			<input type="password" class="input-field" placeholder="Enter password" name="txtPassword" required>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn" name="submit-btn">LOGIN IN</button>
        </form>


		<form id= "register" class= "input-group-register" action="RegistrationHandler.php" method="post">
			<input type="text" class= "input-field" placeholder="Name" name="txtName" id = "txtName" required/>
			<input type="email" class= "input-field" placeholder="Email" name="txtEmail" id="txtEmail" required/>
			<input type="password" class= "input-field" placeholder="Password" id="txtPassword" name="txtPassword" required/>
            <input type="password" class= "input-field" placeholder="Confirm Password" id="txtConfimPassword" name="txtConfimPassword" required/>
            <input type="number" class= "input-field" placeholder="Contact Number" name="txtContactNo" id="txtContactNo" pattern="[0-9]{10}" required/>
			<input type="checkbox" class="check-box"><span>I Agree to the Terms and Conditions</span>
			<button type="submit" value="CREATE ACCOUNT" onClick="checkPassword()" class="submit-btn" name="submit-btn">CREATE ACCOUNT</button>
			
            <a href="homepage.html">Art of fashion</a>
			
		</form>
        

<script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
