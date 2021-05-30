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




<main class="image_a">
	<p id="search_pad">Logged in as </p>
	<h2>Products - Men</h2>

	

<?php
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

$sql = "SELECT id, product, picture, gender, size, price FROM product_table WHERE gender='female'";
$result = $conn->query($sql);


    // output data of each row
	while($row = $result->fetch_assoc()) {

	// <a href='be_update.php?update
	// $var = 1;
	echo	'<a href="products_detail.php?product='.$row['id'].'"><img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=200 height=200 alt="product image"/></a>';
	// echo '<img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=50 height=50 alt="product image"/>';
	}

$conn->close();
?>


	
			
<!--          
	<a href="products_detail.html"><img width = 200  src = "images/products/m1.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m2.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m3.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m4.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m5.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m6.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m7.jpg" border="0"  /></a>
	<a href="products_detail.html"><img width = 200  src = "images/products/m8.jpg" border="0"  /></a> -->





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

