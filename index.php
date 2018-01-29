<!DOCTYPE>
<?php 
session_start();
include("functions/function.php");

?>
<html>
	<head>
		<title>My GameShop</title>
		<h1> <marquee> Welcome to our Online Gameshop !!! </marquee></h1>
		
		<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/editedlogo4.png" /> </a>
			<a href="index.php"><img id="banner" src="images/banner6.png"/></a>
			
			
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="allproducts.php">All Products</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
			
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
				<?php getProductCategory(); ?>
				
				<ul>
			
			</div>
		
					

			
				<div id="products_box">
				
				<?php getPro(); ?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2017 by www.gameshop.com</h2>
		
		</div>
	
	</div> 
<!--Main Container ends here-->


</body>
</html>