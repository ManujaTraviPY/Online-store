<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

            <title>untitled</title>
            <link rel="stylesheet" type="text/css" href="style.css">

    </head>



    <body>    
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
			 <li><a href="aboutus.php">About</a></li>
			<a href="login.php">Sign Up</a>
	 <a href="#" aria-pressed="My Cart" title="My Cart">Cart</a>
  </ul>
</nav>


        <!--HEADER end-->
        <div class="heading"> <img src="store pics/beautiful-curly-brunette-dark-skinned-fashion-designer-poses-office-leans-table.jpg" width="1092" height="1047">
            <h1>About Us</h1>
        </div>

        <!--about starts-->
        <section class="about">

            <div class="image">
                <img src="store pics/group-people-working-out-business-plan-office.jpg">
            </div>

            <div class="content">
                <h3>Why choose Us?</h3>  
                <p>
                    With Art of fashion
                    you'll enjoy the best possible products, 
                    quality, service and support – guaranteed! 

                </p>
                <p>
                    At Art of fashion we combine all the convenience 
                    of online selection and ordering with the best in personal,
                    attentive customer care. Why wouldn't we? By being the 
                    best, our reputation grows and grows. Everyone’s happy!
                </p>  

                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-box">
                            <span>thousands of <br> desings</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd">
                            <span>affordable <br>price</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-users">
                            <span>Friendly Customer Service</span>
                        </i>
                    </div>

                </div>
            </div>

        </section>
        <!--about ends-->












        <!--footer section starts -->

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick access</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i>Home</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>Products</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>About</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>Login</a>
                </div>

                <div class="box">
                    <h3>more</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                    
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +94 112239911</a>
                    <a href="#"> <i class="fas fa-phone"></i> +94 773880400</a>
                    <a href="#"> <i class="fas fa-envelope"></i> artoffashion.sup@gmail.com</a>
                    <a href="#"> <i class="fas fa-map"></i> No 12, street ave, Colombo 7.</a>
                
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#" target=""><i class="fab fa-facebook"></i> facebook</a>
                    <a href="#" target=""><i class="fab fa-instagram"></i> instagram</a>
                    <a href="#" target=""><i class="fab fa-twitter"></i> twitter</a>
                    <a href="#" target=""><i class="fab fa-linkedin"></i> linkedin</a>
                </div>
            </div>
        </section>
    </body>


    

</html>
