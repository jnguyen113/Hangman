<!--- File: index.php
 * Project: Project 2
 * File Created: 3/20/21
 * Author: Johnathan Nguyen
 -->
<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<title>Hangman</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>

    <body>
    <?php 
        include 'common.php'; 	
    ?>
        <h1>Welcome to Hangman</h1>
        <img src="images/noose.png" alt="noose">

        <img src="images/step_6.png" alt="figure">
        <div id="buttons">
        
        
            <div class="left_button">
                <a href="signup.php">
                    <button class="function">Sign Up</button>
                </a>
                <a href="login.php">
                    <button class="function">Log In</button>
                </a>

            </div>
            <div class="right_button">
                <a href="newgame.php">
                    <button class="function">Play</button>
                </a>
                <a href="leaderboard.php">
                    <button class="function">Leaderboard</button>
                </a>
            </div>
        </div>
        
		<?php
			//footer function 
			footerFunction();
		?>
    </body>
</html>