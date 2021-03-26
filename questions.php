<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Question
        </title>
        <link rel="stylesheet" href="./jeopardy.css"/>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="signup.php">Register</a>
            <a href="login.php">Login</a>
            <a href="about.php">About Us</a>
        </div>

        <div class="center">
            <h1>WEB PROGRAMMING JEOPARDY</h1>
        </div>
        <div class="columns">
            <!-- Question Board -->
            <div class="rightcol col">
                <?php
                $login = false;
                if(isset($_COOKIE['user'])){
                  if(!empty($_COOKIE['user'])){
                 $login = true;
                 }
                 }
                if(!$login){
                    setcookie('backpage', "login.php", time() + (86400 * 30), "/");
                    setcookie('prev', "not login", time() + (86400 * 30), "/");
                    header("Location: error.php");
                    exit();
                }
                $file = "./questions.txt";
                $contents = file_get_contents($file);
                $subject = $_POST["subject"];
                $pattern = "/".$subject."[,](.*?)[,]what is(.*?)[?]/i";
                preg_match($pattern,$contents,$match);
                $array = preg_split("/\,/", $match[0]);
                setcookie("subject", $array[0], time() + (3600 * 30), "/");
                setcookie("answer", $array[2], time() + (3600 * 30), "/");
                echo $array[1];
                setcookie("points", $match[0], time() + (3600 * 30), "/");
                ?>
                <br><br>
                <form action="./answers.php" method="post">
                <input type="text" name="input"/>
                <input type="submit" value="Submit">
              </form>
            </div>
        </div>
    </body>
</html>