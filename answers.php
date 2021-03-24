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
                setcookie("answered", $_COOKIE['answered'] + 1, time() + (3600 * 30), "/");
                $answer = $_POST["input"];
                $pattern = "/[0-9]00/i";
                preg_match($pattern,$_COOKIE['subject'],$match);
                if (strcasecmp($answer,$_COOKIE['answer']) == 0) {
                  echo "Correct! You have been awarded ".$match[0]." points";
                  setcookie("points", $match[0], time() + (3600 * 30), "/");
                } else {
                  echo "Incorrect!";
                  setcookie("points", 0, time() + (3600 * 30), "/");
                }
                if ($_COOKIE["currentplayer"] == "player1") {
                  setcookie("player1", $_COOKIE["player1"] + $_COOKIE["points"], time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player2", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player2") {
                  setcookie("player2", $_COOKIE["player2"] + $_COOKIE["points"], time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player3", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player3") {
                  setcookie("player3", $_COOKIE["player3"] + $_COOKIE["points"], time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player4", time() + (3600 * 30), "/");
                } elseif ($_COOKIE["currentplayer"] == "player4") {
                  setcookie("player4", $_COOKIE["player4"] + $_COOKIE["points"], time() + (3600 * 30), "/");
                  setcookie("currentplayer", "player1", time() + (3600 * 30), "/");
                }
              ?>
              <br>
              <a href="index.php">Back to gameboard</a>
            </div>
        </div>
    </body>
</html>