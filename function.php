<?php 
// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","","Gameshop");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
 // getting the user IP address
  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
  
  
  
	//getting the Categories

function getproductcategory(){
	
	global $con; 
	
	$get_Category = "select * from productcategory";
	
	$run_Category = mysqli_query($con, $get_Category);
	
	while ($row_Category=mysqli_fetch_array($run_Category)){
	
		$pcPid = $row_Category['pcPid']; 
		$Category = $row_Category['Category'];
	
	echo "<li><a href='index.php?cat=$pcPid'>$Category</a></li>";
	
	
	}
}

//getting the Movies

function getMovie(){
	
	global $con; 
	
	$get_Movie = "select * from Movie";
	
	$run_Movie = mysqli_query($con, $get_Movie);
	
	while ($row_Movie=mysqli_fetch_array($run_Movie)){
	
		$M_Pid = $row_Movie['M_Pid']; 
		$Director = $row_Movie['Director'];
	
	echo "<li><a href='index.php?cat=$M_Pid'>$Director</a></li>";
	
	
	}


}

//getting the Games

function getGame(){
	
	global $con; 
	
	$get_Game = "select * from Game";
	
	$run_Game = mysqli_query($con, $get_Game);
	
	while ($row_Game=mysqli_fetch_array($run_Game)){
	
		$G_Pid = $row_Game['G_Pid']; 
		$Publisher = $row_Game['Publisher'];
	
	echo "<li><a href='index.php?Game=$G_Pid'>$Publisher</a></li>";
	
	
	}
}

// Getting the products
function getPro(){

	if(!isset($_GET['Movie'])){
		if(!isset($_GET['Game'])){

	global $con; 
	
	$get_pro = "select * from product where Award='Academy'";

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
					
					<img src='adminarea/Product_images/$Image' width='180' height='180' />
					
					<p><b> Price:$ $Price </b></p>
					
					<a href='details.php?Pid=$Pid' style='float:left;'>Details</a>
					
					<a href='index.php?add_cart=$Pid'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}
	}
}

}

function getentireProducts(){

	if(!isset($_GET['Movie'])){
		if(!isset($_GET['Game'])){

	global $con; 
	
	$get_pro = "select * from product";

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
					
					<img src='adminarea/Product_images/$Image' width='180' height='180' />
					
					<p><b> Price:$ $Price </b></p>
					
					<a href='details.php?Pid=$Pid' style='float:left;'>Details</a>
					
					<a href='index.php?add_cart=$Pid'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";
	
	}

		}
	}
}

?>