<!DOCTYPE>
<?php 

include("functions/function.php");

?>
<html>
	<head>
		<title>My GameShop</title>
		
		
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
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			
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
				<?php getProductCategory()?>;
			
			<div id="content_area">
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					
					</span>
			</div>	
				
			
			
			</div>
		
			
			
				<div id="products_box">
	<?php 
	
	if(isset($_GET['search'])){
	
	$search_query = $_GET['user_query'];
	
	$get_pro = "select * from product where keywords like '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$Pid = $row_pro['Pid'];
		$Award = $row_pro['Award'];
		$Title = $row_pro['Title'];
		$Rating = $row_pro['Rating'];
		$Year_Released = $row_pro['Year_Released'];
		$Price = $row_pro['Price'];
		$Image=$row_pro['Image'];
	
		echo "
				<div id='single_product'>
				
					<h3>$Title</h3>
					
					<img src='adminarea/product_images/$Image' width='180' height='180' />
					
					<p><b> $ $Price </b></p>
					
					<a href='details.php?Pid=$Pid' style='float:left;'>Details</a>
					
					<a href='index.php?Pid=$Pid'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}
	}
	?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2017 by www.Gameshop.com</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>