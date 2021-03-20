<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jeopardy Homepage</title>
        <link rel="stylesheet" href="./jeopardy.css"/>
    </head>
    <body>
        <?php $name = $_POST["name"];?>

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
            <table>
                <tr>
                    <th>Random Subjects</th> 
                    <th>Computer Science</th>
                    <th>Memes</th>
                    <th>Big Brain Questions</th>
                    <th>Smol Brain Questions</th>    
                </tr>
                <tr>
                    <td><a href = "scene1.html">100</a></td>
                    <td><a href = "scene1.html">100</a></td>
                    <td><a href = "scene1.html">100</a></td>
                    <td><a href = "scene1.html">100</a></td>
                    <td><a href = "scene1.html">100</a></td> 
                </tr>
                <tr>
                    <td><a href = "scene1.html">200</a></td>
                    <td><a href = "scene1.html">200</a></td>
                    <td><a href = "scene1.html">200</a></td>
                    <td><a href = "scene1.html">200</a></td>
                    <td><a href = "scene1.html">200</a></td>
                </tr>
                <tr>
                    <td><a href = "scene1.html">300</a></td>
                    <td><a href = "scene1.html">300</a></td>
                    <td><a href = "scene1.html">300</a></td>
                    <td><a href = "scene1.html">300</a></td>
                    <td><a href = "scene1.html">300</a></td>
                </tr>
                <tr>
                    <td><a href = "scene1.html">400</a></td>
                    <td><a href = "scene1.html">400</a></td>
                    <td><a href = "scene1.html">400</a></td>
                    <td><a href = "scene1.html">400</a></td>
                    <td><a href = "scene1.html">400</a></td>
                </tr>
                <tr>
                    <td><a href = "scene1.html">500</a></td>
                    <td><a href = "scene1.html">500</a></td>
                    <td><a href = "scene1.html">500</a></td>
                    <td><a href = "scene1.html">500</a></td>
                    <td><a href = "scene1.html">500</a></td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>