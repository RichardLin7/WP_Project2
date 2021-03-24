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
            <!-- Leader Board -->
            <div class="leftcol col">
                <p>
                    It's <?php echo $_COOKIE["currentplayer"]."'s"; ?> turn!
                    </br>
                    _________________________
                </p>
                <h3>Leaderboard</h3>
                <p>
                    <?php
                      echo "Player 1: ".$_COOKIE["player1"];
                      echo "<br>Player 2: ".$_COOKIE["player2"];
                      echo "<br>Player 3: ".$_COOKIE["player3"];
                      echo "<br>Player 4: ".$_COOKIE["player4"];
                    ?>
                </p>
            </div>
  
            <!-- Question Board -->
            <div class="rightcol col">
              <?php
                $file = "questions.txt";
                $contents = file_get_contents($file);
                $subject = $_POST["subject"];
                $pattern = "/".$subject."[,](.*?)[,]what is(.*?)[?]/i";
                preg_match($pattern,$contents,$match);
                $array = preg_split("/\,/", $match[0]);
                setcookie("subject", $array[0], time() + (3600 * 30), "/");
                setcookie("answered", $array[2], time() + (3600 * 30), "/");
                echo $array[1];
                
              ?>
                <br>
                <form action="./answers.php" method="post">
                <input type="text" name="input"/>
                <input type="submit" value="Submit">
              </form>
            </div>
        </div>
    </body>
</html>