<!DOCTYPE>
<?php 
session_start();
include("functions/function.php");
include("includes/db.php"); 
?>
<html>
	<head>
		<title>My  GameShop</title>
		
		
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
				<li><a href="customer_register">Sign Up</a></li>
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
				
				<ul>
					
				
			</div>
		
			<div id="content_area">
			
			
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					
					Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items:  Total Price:  <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					
					</span>
			</div>
			
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Create an Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Cid:</td>
							<td><input type="text" name="Cid" required/></td>
						</tr>
						
						<tr>
							<td align="right">Cname:</td>
							<td><input type="text" name="Cname" required/></td>
						</tr>
						
						<tr>
							<td align="right">Caddress:</td>
							<td><input type="text" name="Caddress" required/></td>
						</tr>
						
						
						<tr>
							<td align="right">Cphone:</td>
							<td><input type="text" name="Cphone" required/></td>
						</tr>
						
						<tr>
							<td align="right">Cemail:</td>
							<td><input type="text" name="Cemail" required/></td>
						</tr>
						
						
					
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
			
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
<?php 
	if(isset($_POST['register'])){
	
		
		$Cid = $_POST['Cid'];
		$Cname = $_POST['Cname'];
		$Caddress = $_POST['Caddress'];
		$Cphone = $_POST['Cphone'];
		$Cemail = $_POST['Cemail'];
		
		
		 $insert_c = "insert into customer(Cid,Cname,Caddress,Cphone,Cemail) values ('$Cid','$Cname','$Caddress','$Cphone','$Cemail')";
	
		
	
	$insert_cust = mysqli_query($con,$insert_c);
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
		
		
		}
	





?>










