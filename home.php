<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jeopardy Homepage</title>
        <link rel="stylesheet" href="./jeopardy.css"/>
    </head>
    <body>
        <?php 
            $name = $_POST["name"]; // used to display who's turn it is
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
                <form action="./questions.php" method="post">
                    <table>
                        <tr>
                            <th>Random Subjects</th> 
                            <th>Computer Science</th>
                            <th>Memes</th>
                            <th>Big Brain Questions</th>
                            <th>Smol Brain Questions</th>    
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" cname="Random subjects" points="100" />
                                <button>100</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Computer Science" points="100" />
                                <button>100</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="100" />
                                <button>100</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="100" />
                                <button>100</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="100" />
                                <button>100</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" cname="Random subjects" points="200" />
                                <button>200</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="200" />
                                <button>200</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="200" />
                                <button>200</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="200" />
                                <button>200</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="200" />
                                <button>200</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" cname="Random subjects" points="300" />
                                <button>300</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="300" />
                                <button>300</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="300" />
                                <button>300</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="300" />
                                <button>300</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="300" />
                                <button>300</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" cname="Random subjects" points="400" />
                                <button>400</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="400" />
                                <button>400</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="400" />
                                <button>400</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="400" />
                                <button>400</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="400" />
                                <button>400</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" cname="Random subjects" points="500" />
                                <button>500</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="500" />
                                <button>500</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="500" />
                                <button>500</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="500" />
                                <button>500</button>
                            </td>
                            <td>
                                <input type="hidden" cname="Random subjects" points="500" />
                                <button>500</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>