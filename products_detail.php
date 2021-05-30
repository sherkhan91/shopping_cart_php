<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Fashionwave</title>

	<link href="style.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body>
	

<header>
	<i class="fab fa-connectdevelop"></i>    Fashionwave
</header>
	
<nav>
	<ul>
	  <li><a  href="index.html" >Home</a></li>
	  <li><a  href="about_us.html" >About Us</a></li>
	  <li><a  href="products.html" >Products</a></li>
	  <li><a  href="policy.html" >Service Policy</a></li>
	  <li><a  href="contact_us.html" >Contact Us</a></li>
	</ul>
</nav>


<main>
	<p id="search_pad">Logged in as </p>
	<h2>Product Detail</h2>

	
	<!-- <img id = "p_detail_img" src = "images/products/m1.jpg" width = 500px;/><div id = "p_detail_pad"> -->

	<?php
	if(isset($_GET['product'])){
		// echo $_GET['product'];
		// echo "hello";


		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "fashionwave";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else{
			// echo "Connection successfull";
		}

		$varid  =  $_GET['product'];
		$sql = "SELECT * FROM product_table WHERE id=".$varid."";
		$result = $conn->query($sql);


			// output data of each row
			while($row = $result->fetch_assoc()) {

			echo '<img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=500 height=500px alt="product image"/><div id = "p_detail_pad">';
			// echo	'<a href="products_detail.php?product='.$row['id'].'"><img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=200 height=200 alt="product image"/></a>';
			// echo '<img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=50 height=50 alt="product image"/>';
			echo '<p><strong>Name</strong>';
			echo  $row['product'].'<br />';
			echo '<strong>Label</strong>';
			echo  $row['label'].'<br />';
			echo '<strong>Gender</strong>';
			echo $row['gender'].'<br />';
			echo '<strong>Size</strong>';
			echo $row['size'].'<br />';
			echo '<strong>Price</strong>';
			echo $row['price'].'<br />';
			echo '<strong>Description</strong>';
			echo $row['description'].'</p>';
		
		

		

		echo '<form id="form2" name="form2" method="post" action="products_cart.php">
		  <p>&nbsp;</p>
		  <p><strong>Quantity</strong> 
			<label>
			<input name="quantity" type="text" id="quantity" size="5" />
			</label>
			<label>
			<input type="submit" name="addcartbtn" id="button2" value="Add to Cart" />
			<!-- <a href="products_cart.php?product=1"></a> -->
			</label>
			<input name="id" type="hidden" id="id" value="'.$row['id'].'" />
		  </p>
		  <p>&nbsp;</p>
		</form>';

			}


		$conn->close();
	}
	?>

		





	</div>

    

	<p></p>
	<p></p>
	<p></p>
	<p></p>
</main>


	
<footer>
	&copy; All Rights Reserved, 2019, stuID, stuName
	<div id="social_icon">
	<a href="http://www.facebook.com"><img alt="facebook icon" src = "images/social_media_icons/facebook.svg" /></a>
	<a href="http://www.instagram.com"><img alt="instagram icon" src = "images/social_media_icons/instagram.svg" /></a>
	<a href="http://www.youtube.com"><img alt="youtube icon" src = "images/social_media_icons/youtube.svg" /></a>
	<a href="http://www.pinterest.com"><img alt="pinterest icon" src = "images/social_media_icons/pinterest.svg" /></a>
	<a href="http://www.twitter.com"><img alt="twitter icon" src = "images/social_media_icons/twitter.svg" /></a>
	</div>
</footer>

	<!-- Link to backend -->
	<p style ="text-align: center;"><a href = "#" ><img src ="images/space.gif" width = "150" height = "60" border = 0 /></a></p>


</body>
</html>

