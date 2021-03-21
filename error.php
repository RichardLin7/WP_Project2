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
        <legend>Error: <?=$_COOKIE['prev'];?> </legend>
        <form action= '<?=$_SESSION['backpage']?>' method="post" enctype="multipart/form-data">
        <div id = 'line'><label><?=errors();?></label><br><br>
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
function errors() {
	$prev = $_COOKIE['prev'];
	setcookie("prev", "", time() - 3600,'/');
  switch($prev){
    case "empty field":
       return "At least one field is empty";
	    break;
	case "invalid name":
	   return "Username is invalid, it must be a 5~12 long and only contains numbers and letters";
	    break;
	case "invalid password":
	    return "Password is invalid, it must be a 5~12 long and only contains numbers and letters";
	    break;
	case "invalid email":
	    return "The email address is invalid";
	    break;
	case "invalid phone number":
	    return "The phone number is invalid";
	    break;
	case "account exist":
	    return "The username is already in used";
	    break;
	case "account not found":
	    return "The username is not in our database";
	    break;
	case "incorrect email":
	    return "The email does not match your username";
	    break;
	case "incorrect phone number":
	    return "The phone number does not match your username";
	    break;
	case "incorrect password":
	    return "The password does not match your username";
	    break;
    default:
		return "Undefined error";
       }
		
}

?>
</html>