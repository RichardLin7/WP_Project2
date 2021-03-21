<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>About us</title>
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
	    <legend>Team Web Jeopardizers</legend>
        <strong>Richard(Leader): </strong>Programmer in charge of Implementation of Jeopardy Logic, UI <br><br>
        <strong>Yuhan: </strong>Programmer in charge of logins, cookies/sessions, UI<br><br>
        <strong>Evgenigy: </strong>Programmer in charge of Form processing, Leader board for users<br><br>
        <strong>Daniel: </strong>Powerpoint Creator and video editor
			

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