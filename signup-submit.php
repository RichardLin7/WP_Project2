<!DOCTYPE html>
<html lang="en">
	<head><meta charset="UTF-8">
		<title>Sign up success</title>
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
        <form action="login.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Welcome!</legend>
                <label>Your Username: <?=signup()?></label>
                <br><br>
                <label>Your <?=gettype1()?>: <?=$_POST['verify']?> </label>
                <br><br>
      <button name="logintype" class ='button' type="submit" value="login1">Login this account</button>
      <button name="logintype" class ='button' type="submit" value="login2">Login other account</button>
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

	function signup(){
         $error = false;
		$req = array('name','verify','type','pw');
        $errtype = "empty field";
         setcookie('backpage', "signup.php", time() + (86400 * 30), "/");
		foreach($req as $field){
		if(!$error && !isset($_POST[$field])){ $error = true;}
        elseif (empty($_POST[$field])) {$error = true;}
	    }
        if(!$error){
		if (strlen($_POST['name'])<5 || strlen($_POST['name'])>12) {
                $error = true;
                $errtype = 'invalid name';
           }}
        if(!$error){   
        if (strlen($_POST['pw'])<5 || strlen($_POST['pw'])>12) {
                $error = true;
                $errtype = 'invalid password';
           }}
        if(!$error){
        switch ($_POST['type']){
            case 'e':
            $pattern1 = "/^@/";
            $pattern2 = "/@$/";
               if(strpos($_POST['verify'],'@') == false){
                $errtype = 'invalid email';
                  $error = true;
               }elseif(preg_match($pattern1, $_POST['verify']) || preg_match($pattern2, $_POST['verify'])){
                  $error = true;
                  $errtype = 'invalid email';
               }
               break;
            case 'p':
            $pattern3 = "/^[0-9]{10}$/";
               if(!preg_match($pattern3, $_POST['verify'])){
                  $error = true;
                  $errtype = 'invalid phone number';
               }
               break;
        }}
        
         if($error)
        {
        setcookie('prev', $errtype, time() + (86400 * 30), "/");
        header("Location: error.php");
        exit();
        }
       
        $single = fopen('users.txt','a');
        $originstring = file_get_contents('users.txt');
        $data = explode("\r\n",$originstring);

        $newuser = $_POST['name'].",".$_POST['type'].",".$_POST['verify'].",".$_POST['pw']."\r\n";

          try {
        foreach($data as $field){
        $ppl = explode(',',$field);
        $errtype = 'account exist';
        if($ppl[0] == $_POST['name']){ 
        setcookie('prev', $errtype, time() + (86400 * 30), "/");
        header("Location: error.php");
        exit();}
        }
         } catch (Exception $e) {
        echo 'blabla';
       echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        fwrite($single,$newuser);
        fclose($single);
        setcookie('name',$_POST['name'],time() + (86400 * 30), "/"); 
        return $_POST['name'];
      }


      function gettype1(){
        switch ($_POST['type']){
            case 'e':
               return "Email";
            case 'p':
               return "Phone Number";
        }
      }
	?>
</html>