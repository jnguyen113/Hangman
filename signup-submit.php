<!--- File: signup-submit.php
 * Project: Project 2
 * File Created: 3/20/21
 * Author: Johnathan Nguyen
 -->
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Signup - Submit Page</title>
        <link href="loginsubmit.css" type="text/css" rel="stylesheet">
    </head>

    <body>
    <?php 
        include 'common.php'; 	
    ?>

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
        /*if validation passes with no errors append to userdetail.txt and welcome user */
        if ($validationFail == 0) {
            $user_credentials = array();
            $user_username=$_POST['username'];
            $user_password=$_POST['password'];
            $user = "\n" . $_POST["username"] ." " . $_POST["password"]; 
            file_put_contents("userdetail.txt", $user, FILE_APPEND);

        ?>
        <legend>Congratulations, Your Sign Up was Successful!</legend>
        <?php
            echo "<strong class='welcome'>Welcome to Hangman, </strong>";
            echo '<strong class="welcome"> ' . $_POST["username"] . '</strong>' ;
           
        ?>
        
            <br>
            <br>
            <a href="login.php">Click here to log in and play!</a>
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
                echo "<br>";
              
        }
        ?>

        <?php
			//footer function 
			footerFunction();
		?>
    </body>
</html>