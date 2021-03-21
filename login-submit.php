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
        <a href="home.php">Play</a>
        <a href="logout.php">Log out</a>
        <a href="about.php">About Us</a>
        </div>
		
		<br>
        <br>


	 <div id = 'box'>
        <form action="home.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Welcome!</legend>
                <label>Player <?=directl();?></label>
                <br><br>
                <label>Are you ready?</label>
                <br><br>
            <strong><label for="section">Number of players</label><br></strong>
            <select name="section" id="section">
                 <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
             </select><br><br>
                <input type="submit" value="GO!"/>
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
  function directl(){
    if(!isset($_COOKIE['user'])){
      return login();}
    elseif(empty($_COOKIE['user'])){
      return login();}
    else{ return $_COOKIE['user'];
     // if(!isset($_POST['logintype'])){return login();}
  //  elseif(empty($_POST['logintype'])){return login();}
   // elseif(!$_SESSION['directlogin']){return login();}
  }
  //  else
  }

	function login(){
         $error = false;
		    $req = array('name','verify','type','pw');
        $errtype = "empty field";
        setcookie('backpage', "login.php", time() + (86400 * 30), "/");
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
            $finduser = false;
            $passwordmatch = false;
            $verifymatch = false;
        foreach($data as $field){
        $ppl = explode(',',$field);
        if($ppl[0] == $_POST['name']){ 
          $finduser = true;
          if($ppl[2] == $_POST['verify']){
             $verifymatch = true;
            if($ppl[3] == $_POST['pw']){
              $passwordmatch = true;
        setcookie('user',  $_POST['name'], time() + (86400 * 30), "/");
        }}}
        }
         } catch (Exception $e) {
       echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        if(!$finduser){
          $errtype = 'account not found';
          setcookie('prev', $errtype, time() + (86400 * 30), "/");
        header("Location: error.php");
        exit();
        }
        if(!$verifymatch){
           $errtype = 'incorrect '.gettype2();
          setcookie('prev', $errtype, time() + (86400 * 30), "/");
        header("Location: error.php");
        exit();
        }

        if(!$passwordmatch){
           $errtype = 'incorrect password';
          setcookie('prev', $errtype, time() + (86400 * 30), "/");
        header("Location: error.php");
        exit();
        }

        fwrite($single,$newuser);
        fclose($single);
        return $_POST['name'];
      }


      function gettype2(){
        switch ($_POST['type']){
            case 'e':
               return "email";
            case 'p':
               return "phone number";
        }
      }
	?>
</html>