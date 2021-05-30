<!doctype html>
<html>
	<style>
		table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		}
		th, td {
		padding: 5px;
		}
		th {
		text-align: left;
		}
		</style>
	
<head>
	<meta charset="UTF-8">
	<title>Fashionwave</title>

	<link href="style_a1.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	
	<!-- Javascript goes here -->
    <script language="JavaScript" type="text/JavaScript">
		

    </script>
	
	<!-- Javascript end -->	
	
	
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
	  <li><a  href="survey.html" >Survey</a></li>
	  <li><a  href="registration.html" >Registration</a></li>
	</ul>
</nav>
	
<main>
	<h2>Back end interface Fashionwave.</h2>



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

$sql = "SELECT id, product, picture, gender, size, price FROM product_table";
$result = $conn->query($sql);

	echo "<table style='width:100%'>";
	echo "<tr>
    <th>Product </th>
    <th>Image</th> 
    <th>Gender</th>
	<th>Size</th>
    <th>Price</th> 
    <th>Action</th>
  </tr>"; 
    // output data of each row
	while($row = $result->fetch_assoc()) {

	echo " <tr>";
	echo "<td>";echo $row['product']; echo "</td>";
	// echo "<td><img src='/jonas_201939900_neto/site/images/products/m1.jpg' alt='boy in apparel' width='50' height='60'></td>";
	echo "<td>";
	// echo 'src="data:image/png;base64,'.base64_encode($row['picture']).'"';
	// echo '<img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'"/>';
	echo '<img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=50 height=50 alt="product image"/>';
	// echo 'src="data:image/jpeg;base64,"'.base64_encode($row['picture']);
	// echo $row['picture']; 
	echo "</td>";
	echo "<td>"; echo $row['gender']; echo "</td>";
	echo "<td>"; echo $row['size']; echo "</td>";
	echo "<td>"; echo $row['price']; echo "</td>";

	echo "<td>  <a href='be_interface.php?delete={$row['id']}'> <input type='button' name='delete' value='delete'></a>    <a href='be_update.php?update={$row['id']}'><input type='button' name='update' value='update'></a></td>";
	echo "</tr>";

	  }


	  // Create connection
	  
		

	  function deletefunction($id) {


		global $conn;

		echo 'Product has been deleted, successfully.';
		$sql2 = "delete FROM product_table WHERE id={$id}";
		$result2 = $conn->query($sql2);

	  }
	
	  if (isset($_GET['delete'])) {
		  $val = $_GET['delete'];
		  echo $val;
		deletefunction($val);
	  }

	  
	//   function updatefunction($id) {
	// 	echo ' updating';
	// 	//On page 1
	// 	$_SESSION['updateid'] = $$id;
	//   }
	
	//   if (isset($_GET['update'])) {
	// 	  $val = $_GET['update'];
	// 	  echo $val;
	// 	updatefunction();
	//   }

 

$conn->close();
?>


<table style="width:100%">
  <!-- <tr>
    <th>Product </th>
    <th>Image</th> 
    <th>Gender</th>
	<th>Size</th>
    <th>Price</th> 
    <th>Action</th>
  </tr> -->
  <!-- <tr>
    <td>Jill</td>
    <td><img src="/jonas_201939900_neto/site/images/products/m1.jpg" alt="boy in apparel" width="50" height="60"></td>
    <td>50</td>
	<td>Jill</td>
    <td>Smith</td>
    <td><button>delete</button><button>update</button></td>
  </tr> -->
</table>

		
		
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



</body>
</html>