<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jeopardy Homepage</title>
    <link rel="stylesheet" href="./jeopardy.css"/>
  </head>
  <body>
    <?php 
      if (!isset($_COOKIE["player1"])) {
        setcookie("player1", 0, time() + (3600 * 30), "/");
        setcookie("player2", 0, time() + (3600 * 30), "/");
        setcookie("player3", 0, time() + (3600 * 30), "/");
        setcookie("player4", 0, time() + (3600 * 30), "/");
        setcookie("points", 0, time() + (3600 * 30), "/");
        setcookie("currentplayer", "player1", time() + (3600 * 30), "/");
      }
    ?>
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
              <form action="questions.php" method="post">
                <table>
                  <tr>
                    <th>Math</th> 
                    <th>Computer Science</th>
                    <th>History</th>
                    <th>Pop Culture</th>
                    <th>Animals</th>    
                  </tr>
                  <tr>
                    <td>
                      <input type="radio" name="subject" id="100" value="math100"/>
                      <label for="100">100</label>                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" value="computerscience100"/>
                      <label for="100">100</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" value="history100"/>
                      <label for="100">100</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" value="popculture100"/>
                      <label for="100">100</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" value="animals100"/>
                      <label for="100">100</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="200" value="math200"/>
                      <label for="200">200</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" value="computerscience200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" value="history200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" value="popculture200"/>
                      <label for="200">200</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" value="animals200"/>
                      <label for="200">200</label>                                
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="300" value="math300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" value="computerscience300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" value="history300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" value="popculture300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" value="animals300"/>
                      <label for="300">300</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="400" value="math400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" value="computerscience400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" value="history400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" value="popculture400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" value="animals400"/>
                      <label for="400">400</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="500" value="math500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" value="computerscience500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" value="history500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" value="popculture500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" value="animals500"/>
                      <label for="500">500</label>
                    </td>
                        </tr>
                    </table>
                  <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>