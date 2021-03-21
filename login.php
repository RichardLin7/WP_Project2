<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Login</title>
		<link href="./jeopardy.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <?php session_start(); 
        $_SESSION['directlogin'] = false;
        directlogin();?>
		<div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="signup.php">Register</a>
        <a href="login.php">Login</a>
        <a href="about.php">About Us</a>
        </div>

		<br>
        <br>
     <div id = 'box'>
		<form action="login-submit.php" method="post" enctype="multipart/form-data">
			<fieldset>
			<legend>Login:</legend>
			<div id = 'line'>
			<strong> <label for="name">UserName: </label></strong>
			 <input type="text" id="name" name="name" size="12" required>
			</div><br><br>
			<div id = 'line'>
			<strong> <label>Verify type: </label></strong>
			 <input type="radio" id = "email" name="type" value="e">
			 <label for="email">Email</label>
			 <input type="radio" id = "phone" name="type" value="p" checked>
			 <label for="phone">Phone</label>
			</div><br><br>
			<div id = 'line'>
			 <strong><label for="verify">Email/Phone</label></strong>
			 <input type="text" id="verify" name="verify" size="12" required>
			</div><br><br>
			<div id = 'line'>
             <strong>
             <label for="pw">Password:</label></strong>
			 <input type="password" id="pw" name="pw" maxlength="12" size="12" required>
	          </div><br><br>
         

	    <input type="submit" value="Login"/>

	    </fieldset>
		</form>
    </div>
		<div id='w3c'>
		 <a href="https://validator.w3.org/">
		<img src='http://codd.cs.gsu.edu/~yyang49/hw3/icons/html.png' alt = 'h5'/></a>
        <a href = "https://jigsaw.w3.org/css-validator/">
		<img src='http://codd.cs.gsu.edu/~yyang49/hw3/icons/css.png' alt = 'css'/></a>
	</div>
	</body>

	<?php
	function directlogin(){
		if(!isset($_POST['logintype'])){return;}
			elseif(empty($_POST['logintype'])){return;}
		setcookie('directlogin',true,time() + (86400 * 30), "/");	
       setcookie('user',  $_COOKIE['name'], time() + (86400 * 30), "/");
      header("Location: login-submit.php");
        exit();
	}

	?>
</html>