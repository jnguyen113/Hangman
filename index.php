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
    <?php session_start(); /* Starts the session */
        if(!isset($_SESSION['UserData']['username'])){
        header("location:login.php");
        exit;
        }
    ?>
    Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
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
                <a href="">
                    <button class="function">Play</button>
                </a>
                <a href="login.php">
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