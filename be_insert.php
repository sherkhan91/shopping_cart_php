<!doctype html>
<html>
	
<head>
	<meta charset="UTF-8">
	<title>Fashionwave</title>

	<link href="style_a1.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	
	<!-- Javascript goes here -->
	   
    <script language="JavaScript" type="text/JavaScript">
		

		

		function notEmpty(elem){
			// console.log("yes im here");
			if (elem.value.length == 0){
				return false;
				// elem.focus();
			}
			else {
				return true;
			}
		}

		function valideAllfields()
		{
			if (notEmpty( document.getElementById("username"))) 
			{

				if (notEmpty(document.getElementById("password"))) 
				{
					
					return true
				}
				else 
				{
					alert("The password field can not be empty!");
					document.getElementById("password").value=''
					document.getElementById("password").focus()
					return false;
				}
			}
			else 
			{
				alert("The username field can not be empty!");
				document.getElementById("username").value=''
				document.getElementById("username").focus()
				// return false;
			}
		}

		function show(){
			$val = document.getElementById("picturefile").value
			console.log($val)

		}
		

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


			<h2>Welcome to login page.</h2>
			<h3>Please Login here.</h3>

			<!-- <form name = "survey" onSubmit="MM_validateForm('name','','R','email','','RisEmail','phone','','R','comment','','R');return document.MM_returnValue"> -->
			<form name = "productinsert" enctype="multipart/form-data"  action="" method="POST" >
				<label><span>product</span></label>
                <input name="product" type="text" id="product"><br>
				
                <label>label</label>
                <input name="label" type="text" id="label"><br>

				<label>gender</label>
                <input name="gender" type="text" id="gender"><br>

				<label>size</label>
                <input name="size" type="number" id="size"><br>

				<label>price</label>
                <input name="price" type="number" id="price"><br>
			
				<label>description</label>
                <input name="description" type="text" id="description"><br>

				<label>quantity</label>
                <input name="quantity" type="number" id="quantity"><br>

				<label>picture</label>
                <!-- <input name="picture" type="image" id="picture"><br> -->
				<input name="userImage" type="file"  alt="Upload" width="48" height="48"  id="userImage">

				<label></label>
                    <input type="submit" name="Submit" value="Submit" >
				<!-- <input type = "button" value = "Submit" onClick = "show()"/> -->
				<input type="reset" name="Reset" value="Reset">

			</form>



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
	// mysqli_query($conn, $sql1) or die("<b>Error:</b> Problem on product Insert<br/>" . mysqli_error($conn));
}




if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
     
		$prod = $_POST['product'];
		$labl = $_POST['label'];
		$gendr = $_POST['gender'];
		$siz = $_POST['size'];
		$pric = $_POST['price'];
		$desc = $_POST['description'];
		$qty = $_POST['quantity'];
		$imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	    
        // $sql = "INSERT INTO output_images(imageType ,imageData)
	// VALUES('{$imageProperties['mime']}', '{$imgData}')";

	$sql1 = "INSERT INTO product_table (id, product, label, gender, size, price, description, quantity, picture) 
	VALUES (NULL, '{$prod}', '{$labl}', '{$gendr}', '{$siz}', '{$pric}', '{$desc}', '{$qty}','{$imgData}')";
        $result = mysqli_query($conn, $sql1) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
        // echo $result;
		if($result ==1)
			echo "product has been addded successfully.";
		else
			echo "something went wrong please input valid inputs and try again!";
	
    }
}
// mysqli_query($conn, $sql1) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));



// $sql = "SELECT product, picture, gender, size, price FROM product_table";
// $result = $conn->query($sql1);

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



</body>
</html>