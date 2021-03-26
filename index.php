<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jeopardy Homepage</title>
    <link rel="stylesheet" href="./jeopardy.css"/>
  </head>
  <body>
        <?php $ret = loginstate();?>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="<?=$ret[2]?>"><?=$ret[0]?></a>
        <a href="<?=$ret[3]?>"><?=$ret[1]?></a>
        <a href="about.php">About Us</a>
        </div>
        <div class="center">
            <h1>WEB PROGRAMMING JEOPARDY</h1>
        </div>
        <div class="columns">
          <?php 
          error_reporting(E_ALL ^ E_WARNING); 
          $login = loginstat();
          ?>
            <!-- Leader Board -->
            <div class="leftcol col">
                <p>
                    It's <?=leaderboard1($login)?>'s turn!
                    </br>
                    _________________________
                </p>
                <h3>Leaderboard</h3>
                <p>
                    <?php
                      leaderboard2($login);
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
                      <input type="radio" name="subject" id="100" <?php if($_COOKIE["math100"] == "used") { ?> Disabled <?php } ?> value="math100"/>
                      <label for="100">100</label>                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" <?php if($_COOKIE["computerscience100"] == "used") { ?> Disabled <?php } ?> value="computerscience100"/>
                      <label for="100">100</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" <?php if($_COOKIE["history100"] == "used") { ?> Disabled <?php } ?> value="history100"/>
                      <label for="100">100</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" <?php if($_COOKIE["popculture100"] == "used") { ?> Disabled <?php } ?> value="popculture100"/>
                      <label for="100">100</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="100" <?php if($_COOKIE["animals100"] == "used") { ?> Disabled <?php } ?> value="animals100"/>
                      <label for="100">100</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="200" <?php if($_COOKIE["math200"] == "used") { ?> Disabled <?php } ?> value="math200"/>
                      <label for="200">200</label>
                                
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" <?php if($_COOKIE["computerscience200"] == "used") { ?> Disabled <?php } ?> value="computerscience200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" <?php if($_COOKIE["history200"] == "used") { ?> Disabled <?php } ?> value="history200"/>
                      <label for="200">200</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" <?php if($_COOKIE["popculture200"] == "used") { ?> Disabled <?php } ?> value="popculture200"/>
                      <label for="200">200</label>                               
                    </td>
                    <td>
                      <input type="radio" name="subject" id="200" <?php if($_COOKIE["animals200"] == "used") { ?> Disabled <?php } ?> value="animals200"/>
                      <label for="200">200</label>                                
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="300" <?php if($_COOKIE["math300"] == "used") { ?> Disabled <?php } ?> value="math300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" <?php if($_COOKIE["computerscience300"] == "used") { ?> Disabled <?php } ?> value="computerscience300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" <?php if($_COOKIE["history300"] == "used") { ?> Disabled <?php } ?> value="history300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" <?php if($_COOKIE["popculture300"] == "used") { ?> Disabled <?php } ?> value="popculture300"/>
                      <label for="300">300</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="300" <?php if($_COOKIE["animals300"] == "used") { ?> Disabled <?php } ?> value="animals300"/>
                      <label for="300">300</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="400" <?php if($_COOKIE["math400"] == "used") { ?> Disabled <?php } ?> value="math400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" <?php if($_COOKIE["computerscience400"] == "used") { ?> Disabled <?php } ?> value="computerscience400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" <?php if($_COOKIE["history400"] == "used") { ?> Disabled <?php } ?> value="history400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" <?php if($_COOKIE["popculture400"] == "used") { ?> Disabled <?php } ?> value="popculture400"/>
                      <label for="400">400</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="400" <?php if($_COOKIE["animals400"] == "used") { ?> Disabled <?php } ?> value="animals400"/>
                      <label for="400">400</label>
                    </td>
                        </tr>
                        <tr>
                    <td>
                      <input type="radio" name="subject" id="500" <?php if($_COOKIE["math500"] == "used") { ?> Disabled <?php } ?> value="math500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" <?php if($_COOKIE["computerscience500"] == "used") { ?> Disabled <?php } ?> value="computerscience500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" <?php if($_COOKIE["history500"] == "used") { ?> Disabled <?php } ?> value="history500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" <?php if($_COOKIE["popculture500"] == "used") { ?> Disabled <?php } ?> value="popculture500"/>
                      <label for="500">500</label>
                    </td>
                    <td>
                      <input type="radio" name="subject" id="500" <?php if($_COOKIE["animals500"] == "used") { ?> Disabled <?php } ?> value="animals500"/>
                      <label for="500">500</label>
                    </td>
                        </tr>
                    </table>
                    <br>
                  <input type="submit" value="Submit"/>
                </form>
            </div>
        </div>
    </body>


    <?php
    function loginstate(){
    $logins = false;
    if(isset($_COOKIE['user']))
      if(!empty($_COOKIE['user']))
        $logins = true;
     if(!$logins){
           $array = array("Register", "Login","signup.php","login.php");
     }else{
           $array = array("Play", "Log out", "index.php", "logout.php");
     } 
     return $array;
  }

    function loginstat(){
      $login = false;
      if(isset($_COOKIE['user'])){
        if(!empty($_COOKIE['user'])){
          $login = true;
        }
      }
      return $login;
    }

    function leaderboard1($login){
      if($login){
        return $_COOKIE["currentplayer"];
      }
      else{
        return 'Unknown user';
      }
    }

    function leaderboard2($login){ 
      if($login){
        echo "Player 1: ".$_COOKIE["player1"];
        echo "<br>Player 2: ".$_COOKIE["player2"];
        echo "<br>Player 3: ".$_COOKIE["player3"];
        echo "<br>Player 4: ".$_COOKIE["player4"];
      }
      else
        echo "Please login to play";
    }
    ?>
</html>