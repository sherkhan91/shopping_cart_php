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
	
	<h2>SHOPPING CART</h2>
	
  <?php
  // echo "here is the id to inclde in cart<br>";
  // if(isset)
  if(isset($_POST['addcartbtn'])){
    // echo $_POST['quantity'];
    // echo "<br>";
    // echo $_POST['id'];

  
  

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

  $varid  =  $_POST['id'];
  $sql = "SELECT * FROM product_table WHERE id=".$varid."";
  $result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {




  echo '      <table width="100%" border="1" cellpadding="4" id = "cart">
  <tr>
    <th width=160px ><strong>Product Ordered</strong></th>
    <th width=120px ><strong>Quantity</strong></th>
    <th width=160px ><strong>Unit Price</strong></th>
    <th align="right"><strong>Cost</strong></th>
  </tr>
  <tr>
    <td><img src="data:image/jpeg; base64,'.base64_encode( $row['picture'] ).'" width=100  alt="product image"/><br /></td>
    <td>'.$_POST['quantity'].'</td>
    <td>'.$row['price'].'</td>
    <td align="right">
    
      $ </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><strong>GST</strong></td>
    <td align="right">5</td>
  </tr>
  
  <tr>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td align="right"><strong>Grand Total</strong></td>
    <td align="right">';
    $total = $row['price']*$_POST['quantity'] +5;
    echo $total.'</td>
  </tr>
</table>    ';
  




  echo '<p>This is order made by <strong></strong> so far, sorry we don t have check out now<br />
  To see other buyers order list, you must log off <a href="#" >here</a>.</p>
  <div id = "order_list">
    <table width="90%" border="1" id="cart_history">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Date/Time</th>
        <th>Total</th>
        <th>GST</th>
        <th>Grand Total</th>
      </tr>
      
        <tr>
          <td>'.$row['product'].'</td>
          <td>'.$_POST['quantity'].'</td>
          <td></td>
          <td>$'.($total-5).' </td>
          <td>$5 </td>
          <td>$'.$total.' </td>
        </tr>
        
    </table>
  </div>';
}
}
  ?>



	
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
