

<!DOCTYPE>

<?php 

include("include/db.php");

?>
<html>
	<head>
		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insertproducts.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center" >
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>
			
			<tr align="left">
			  <td> Pid </td>
			  <td><input type="text" name="Pid" required/></td>
			 </tr>
			
			
			<tr align="left">
			  <td> Award </td>
			  <td><input type="text" name="Award" required/></td>
		     </tr>
			
			 <tr align="left">
			  <td> Title </td>
			  <td><input type="text" name="Title" required/></td>
			 </tr>
			
			 <tr align="left">
			  <td> Rating </td>
			  <td><input type="text" name="Rating" required/></td>
			 </tr>
			 
			<tr align="left">
			  <td> Year_Released </td>
			  <td><input type="text" name="Year_Released" required/></td>
			 </tr>
			 
			 <tr align="left">
			  <td> Price </td>
			  <td><input type="text" name="Price" required/></td>
			 </tr>
			 
			 <tr>
				<td align="left">Image</td>
				<td><input type="file" name="Image" /></td>
			</tr>
			<tr align="left">
			  <td> keywords </td>
			  <td><input type="text" name="keywords" required/></td>
			 </tr>
			 
			
			 
			<tr align="center">
			  <td colspan="2"><input type="submit" name="insert_post" value="insert now"/> </td>
			  
		</table>
	</form>
		

</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$Pid = $_POST['Pid'];
		$Award= $_POST['Award'];
		$Title = $_POST['Title'];
		$Rating = $_POST['Rating'];
		$Year_Released = $_POST['Year_Released'];
		$Price = $_POST['Price'];
		$keywords=$_POST['keywords'];
		
		$Image = $_FILES['Image']['name'];
		$Image_tmp = $_FILES['Image']['tmp_name'];
		
		move_uploaded_file($Image_tmp,"Product_images/$Image");
		
	
	
				 $insert_product = "insert into product (Pid,Award,Title,Rating,Year_Released,Price,Image,keywords) values ('$Pid','$Award','$Title','$Rating','$Year_Released','$Price','$Image','$keywords')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Product Has been inserted!')</script>";
		 echo "<script>window.open('insertproducts.php','_self')</script>";
		 
		 }
	}

?>



