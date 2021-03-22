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
                    It's <?php print $name ?> turn!
                    </br>
                    _________________________
                </p>
                <h3>Leaderboard</h3>
                <p>
                    This is where the leaderboard code goes.
                </p>
            </div>
  
            <!-- Question Board -->
            <div class="rightcol col">
                <form action="./answers.php" method="post">
                <?php
                    $file = "./questions.txt";                
                    $subject = $_POST["subject"];
                    $points =  $_POST["points"];
                    $contents = file_get_contents($file);
                    $pattern = "/".$subject."[,](.*?)[,]what is(.*?)[?]/i";
                    preg_match($pattern,$contents,$match);
                    $array = preg_split("/\,/", $match[0]);
                    $_COOKIE['array'] = $array;
                    $_COOKIE['points'] = $points;
                    echo $array[1];
                ?>
                <br>
                    <br>
                    <input type="text" name="input"/>
                    <br>
                    <br>
                    <input type="submit" value="Submit"/>
                </form>
            </div>
        </div>
    </body>
</html>