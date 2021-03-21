<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Index</title>
		<link href="./jeopardy.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
        <?php session_start(); 
         $ret = loginstate();?>
		<div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="<?=$ret[2]?>"><?=$ret[0]?></a>
        <a href="<?=$ret[3]?>"><?=$ret[1]?></a>
        <a href="about.php">About Us</a>
        </div>

		<br>
        <br>

     <div id = 'box2'>
     	<img src = 'home.jpg' alt = 'hj'/> <br> <br>
		<fieldset>
	    <p>This page is a web-based jeopardy game<br>
        Sign up, log in and...<br>
        Enjoy your game!<br><br></p>
        <p>Results and page (C) Copyright Web Jeopardizers Inc.</p>
			

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
	function loginstate(){
		$logins = false;
		if(isset($_COOKIE['user']))
			if(!empty($_COOKIE['user']))
				$logins = true;
	   if(!$logins){
           $array = array("Register", "Login","signup.php","login.php");
	   }else{
           $array = array("Play", "Log out", "home.php", "logout.php");
	   } 
	   return $array;
	}

	?>
</html>