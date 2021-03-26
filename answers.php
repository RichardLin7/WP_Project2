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

                setcookie($_COOKIE["subject"], "used", time() + (86400 * 30), "/");
                setcookie("used", $_COOKIE["used"] + 1, time() + (86400 * 30), "/");

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

                if($_COOKIE["used"] >= $end){
                  $winner = max($_COOKIE["player1"], $_COOKIE["player2"], $_COOKIE["player3"], $_COOKIE["player4"]);
                  if($_COOKIE["player1"] == $winner){
                    if($_COOKIE["player1"] == $_COOKIE["player2"] || $_COOKIE["player1"] == $_COOKIE["player3"] || $_COOKIE["player1"] == $_COOKIE["player4"]){
                      echo "<br><br>Draw!";
                    }else{
                      echo "<br><br>Player 1 Wins!";
                    }
                  }else if($_COOKIE["player2"] == $winner){
                    if($_COOKIE["player2"] == $_COOKIE["player3"] || $_COOKIE["player2"] == $_COOKIE["player4"] || $_COOKIE["player2"] == $_COOKIE["player1"]){
                      echo "<br><br>Draw!";
                    }else{
                      echo "<br><br>Player 2 Wins!";
                    }
                  }else if($_COOKIE["player3"] == $winner){
                    if($_COOKIE["player3"] == $_COOKIE["player4"] || $_COOKIE["player3"] == $_COOKIE["player1"] || $_COOKIE["player3"] == $_COOKIE["player2"]){
                      echo "<br><br>Draw!";
                    }else{
                      echo "<br><br>Player 3 Wins!";
                    }
                  }else if($_COOKIE["player3"] == $winner){
                    if($_COOKIE["player4"] == $_COOKIE["player1"] || $_COOKIE["player4"] == $_COOKIE["player2"] || $_COOKIE["player4"] == $_COOKIE["player3"]){
                      echo "<br><br>Draw!";
                    }else{
                      echo "<br><br>Player 4 Wins!";
                    }
                  }
                }
              ?>
              <br><br>
                <form action="./index.php">
                  <input type="submit" <?php if($_COOKIE["used"] >= $end) { ?> Disabled <?php } ?> value="Back to Gameboard"/>
                </form>
              <br><br>
                <form action="./login.php">
                  <input type="submit" <?php if(!($_COOKIE["used"] >= $end)) { ?> Disabled <?php } ?> value="Back to Login"/>
                </form>
            </div>
        </div>
    </body>
</html>