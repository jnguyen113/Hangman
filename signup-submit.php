<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Signup - Submit Page</title>
        <link href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css" type="text/css" rel="stylesheet">
    </head>

    <body>
    <?php

        $validationFail = 0;
        //validating there is a value for each field
        if(isset($_POST['username']) && isset($_POST['password'])     ) {
        }

        /*  validating username, can't be empty         */
        if (empty($_POST["username"])) {
            $validationFail = $validationFail + 1;
        }
        /*  validating password, can't be empty         */
        if (empty($_POST["password"])) {
            $validationFail = $validationFail + 1;
        }
        /*if validation passes with no errors append to singles.txt and welcome user */
        if ($validationFail == 0) {
            $userInfo = "\n" . $_POST["username"] . "," . $_POST["password"]; 
            file_put_contents("credentials.txt", $userInfo, FILE_APPEND);

            $user = array($_POST["username"], $_POST["password"]);
            file_put_contents("userdetail.txt", $user, FILE_APPEND);

        ?>

        <h3>Thank you!</h3>
        <?php
            echo "Welcome to Hangman, ";
            echo $_POST["username"] 
        ?>!
            <br>
            <br>
            Now <a href="login.php">log in play!</a>
            <br>
            <br>
        <?php
        }
            //else, sorry page
            else {
                echo "<h3>Error! Invalid data.</h3>";
                echo "<br>";
                echo "We're sorry. You submitted invalid user information. Please go back and try again.";
                echo "<br>";
                echo "<br>";
                echo $_POST["username"];
                echo "<br>";
                echo $_POST["password"];
              
        }
        ?>

    </body>
</html>