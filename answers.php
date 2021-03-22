<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Answer
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
              <?php 
                $input = $_POST["input"];
                $points = $_COOKIE["points"];
                $array = $_COOKIE["array"];
                $pattern = "/[0-9]00/i";
                echo $input;
                echo $points;
                echo $array[1];
                preg_match($pattern,$array[0],$match);
                if (strcasecmp($input,$array[2]) == 0) {
                  echo "Correct!";
                } else {
                  echo "Incorrect!";
                }
              ?>
              <br>
            </div>
        </div>
    </body>
</html>