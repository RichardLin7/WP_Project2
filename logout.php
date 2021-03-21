<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Error!</title>
		<link href="./jeopardy.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php session_start(); ?>
		  <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="signup.php">Register</a>
        <a href="login.php">Login</a>
        <a href="about.php">About Us</a>
        </div>
		<br>
        <br>
     <div id = 'box'>
    <fieldset>
        <legend>Log out <?=logout();?></legend>
        <form action= 'index.php' method="post" enctype="multipart/form-data">
        <input type="submit" value="Back"/>
	</fieldset>	
		
    </div>
		<div id='w3c'>
		 <a href="https://validator.w3.org/">
		<img src='http://codd.cs.gsu.edu/~yyang49/hw3/icons/html.png' alt = 'h5'/></a>
        <a href = "https://jigsaw.w3.org/css-validator/">
		<img src='http://codd.cs.gsu.edu/~yyang49/hw3/icons/css.png' alt = 'css'/></a>
	</div>
	
	</body>


<?php
function logout() {
   setcookie("user", "", time() - 3600,'/');
   return "successful";
		
}

?>
</html>