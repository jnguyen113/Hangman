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
        if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])     ) {
        }
        /*  validating name, can't be empty         */
        if (empty($_POST["name"])) {
            $validationFail = $validationFail + 1;
        }
        /*  validating name, can't be empty         */
        if (empty($_POST["username"])) {
            $validationFail = $validationFail + 1;
        }
        /*  validating name, can't be empty         */
        if (empty($_POST["password"])) {
            $validationFail = $validationFail + 1;
        }

        ?>

        <h3>Thank you!</h3>
        <?php
            echo "Welcome to Hangman, ";
            echo $_POST["name"] 
        ?>!
            <br>
            <br>
            Now <a href="matches.php">log in to see your matches!</a>
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