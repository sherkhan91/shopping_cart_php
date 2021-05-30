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


			<h2>update will be done here.</h2>
			<h3>update page.</h3>

			<!-- <form name = "survey" onSubmit="MM_validateForm('name','','R','email','','RisEmail','phone','','R','comment','','R');return document.MM_returnValue"> -->
			


		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "fashionwave";

			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			else{
				// echo "Connection successfull";
			}

			$var= $_GET['update'];
			echo $var;
			// $var = 11;
			$sql = "SELECT * FROM product_table WHERE id={$var}";
			$result = $conn->query($sql);

			$count = 0;
			while($row = $result->fetch_assoc()) {

			// echo '<form name = "productupdate"  action="'.$_SERVER["PHP_SELF"].'" method="POST" >';
			echo '<form name = "productupdate"  action="" method="POST" >';
			echo "<label>id</label>";
			echo '<input name="uid" type="number" id="uid" value='.$var.'><br>';

			echo	'<label><span>product</span></label>';
            echo    '<input name="product" type="text" value='.$row["product"].' id="product"><br>';
				
            echo    '<label>label</label>';
            echo    '<input name="label" type="text" value='.$row["label"].' id="label"><br>';

			echo	'<label>gender</label>';
            echo    '<input name="gender" type="text" value='.$row["gender"].' id="gender"><br>';

			echo	'<label>size</label>';
            echo    '<input name="size" type="number"  value='.$row["size"].' id="size"><br>';

			echo	'<label>price</label>';
            echo    '<input name="price" type="number"   value='.$row["price"].' id="price"><br>';
			
			echo	'<label>description</label>';
            echo    '<input name="description" type="text"  value='.$row["description"].' id="description"><br>';

			echo	'<label>quantity</label>';
            echo    '<input name="quantity" type="number" value='.$row["quantity"].' id="quantity"><br>';

				// <label>picture</label>
                // <!-- <input name="picture" type="image" id="picture"><br> -->
				// <input name="userImage" type="file"  alt="Upload" width="48" height="48"  id="userImage">

			echo	'<label></label>';
            echo     '<input type="submit" name="SubmitButton" value="Submit" >';
			echo	'<input type="reset" name="Reset" value="Reset">';

			echo    '</form>';
			}

			?>
		



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


    if (isset($_POST['SubmitButton'])){


		$id=$_POST['uid'];
		$prod = $_POST['product'];
		$labl = $_POST['label'];
		$gendr = $_POST['gender'];
		$siz = $_POST['size'];
		$pric = $_POST['price'];
		$desc = $_POST['description'];
		$qty = $_POST['quantity'];
		// $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));

	$sql1 = "UPDATE product_table SET product='".$prod."', label='".$labl."', gender='".$gendr."', size=".$siz.", price=".$pric.", description='".$desc."', quantity=".$qty." WHERE id=".$id."";
        $result = mysqli_query($conn, $sql1) or die("<b>Error:</b> Problem on  Insert<br/>" . mysqli_error($conn));
		echo "something went wrong please input valid inputs and try again!";
        // echo $result;
		if($result ==1)
			header("Location: be_interface.php", true, 301);
		else
			echo "something went wrong please input valid inputs and try again!";
	
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



</body>
</html>