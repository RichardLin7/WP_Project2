<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Answer
        </title>
        <link rel="stylesheet" href="./jeopardy.css"/>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
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
                setcookie("answered", $_COOKIE['answered'] + 1, time() + (3600 * 30), "/");
                $answer = $_POST["input"];
                $pattern = "/[0-9]00/i";
                $end = 25;
                preg_match($pattern,$_COOKIE['subject'],$match);
                if (strcasecmp($answer,$_COOKIE['answer']) == 0) {
                  echo "Correct! ".$_COOKIE["currentplayer"]." have been awarded ".$match[0]." points";
                  $points = $match[0];
                } else {
                  echo "Incorrect!";
                  $points = 0;
                }

                setcookie("used", $_COOKIE["used"] + 1, time() + (86400 * 30), "/"); // increments used by 1
                setcookie($_COOKIE["subject"], "used", time() + (86400 * 30), "/"); // sets the question cookie as used

                if ($_COOKIE["currentplayer"] == "player1") {
                  setcookie("player1", $_COOKIE["player1"] + $points, time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player2", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player2") {
                  setcookie("player2", $_COOKIE["player2"] + $points, time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player3", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player3") {
                  setcookie("player3", $_COOKIE["player3"] + $points, time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player4", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player4") {
                  setcookie("player4", $_COOKIE["player4"] + $points, time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player1", time() + (3600 * 30), "/");
                }
                
                echo "<br><br>";
                
                if ($_COOKIE["used"] == $end){
                  $max = max($_COOKIE["player1"], $_COOKIE["player2"], $_COOKIE["player3"], $_COOKIE["player4"]);
                  if($_COOKIE["player1"] == $max){
                    echo "player1 Wins!";
                  }elseif($_COOKIE["player2"] == $max){
                    echo "player2 Wins!";
                  }elseif($_COOKIE["player3"] == $max){
                    echo "player3 Wins!";
                  }elseif($_COOKIE["player4"] == $max){
                    echo "player4 Wins!";
                  }
                }
              ?>
              <br><br>
              <form action="./index.php">
                <input type="submit" <?php if($_COOKIE["used"] == $end) { ?> Disabled <?php } ?> value="Back to Gameboard" />
              </form>
              <form action="./login.php">
                <input type="submit" <?php if(!($_COOKIE["used"] == $end)) { ?> Disabled <?php } ?> value="Back to Login" />
              </form>
            </div>
        </div>
    </body>
</html>