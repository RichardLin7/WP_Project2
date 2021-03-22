<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jeopardy Homepage</title>
        <link rel="stylesheet" href="./jeopardy.css"/>
    </head>
    <body>
        <?php 
            $name = $_COOKIE["user"];
            $turn = $_POST["name"]; // used to display who's turn it is
            $player1 = $_POST["player1"]; // variables subject to change for leaderboard
            $player2 = $_POST["player2"]; // variables subject to change for leaderboard
            $player3 = $_POST["player3"]; // variables subject to change for leaderboard
            $player4 = $_POST["player4"]; // variables subject to change for leaderboard
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
                    It's <?php print $turn ?> turn!
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
                        <form action="./questions.php" method="post">
                            <input type="hidden" name="points" value="100"/>
                            <input type="hidden" name="subject" value="math100"/>
                            <button type="submit" value="Submit">100</button>
                        </form>                                
                    </td>
                    <td>
                      <input type="radio" name="subject" value="computerscience100"/>
                      <label for="100">100</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject" value="history100"/>
                      <label for="100">100</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject" value="popculture100"/>
                      <label for="100">100</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="animals100"/>
                      <label for="100">100</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject"  value="math200"/>
                      <label for="200">200</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="computerscience200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="history200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="popculture200"/>
                      <label for="200">200</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="animals200"/>
                      <label for="200">200</label>                                
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject"  value="math300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="computerscience300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="history300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="popculture300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="animals300"/>
                      <label for="300">300</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject"  value="math400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="computerscience400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="history400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="popculture400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="animals400"/>
                      <label for="400">400</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject"  value="math500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="computerscience500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="history500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="popculture500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject"  value="animals500"/>
                      <label for="500">500</label>
                    </td>
                        </tr>
                    </table>
            </div>
        </div>
    </body>
</html>