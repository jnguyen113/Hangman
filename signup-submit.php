<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Signup - Submit Page</title>
        <link href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css" type="text/css" rel="stylesheet">
    </head>

    <body>
    <?php 
        include 'common.php'; 	
    ?>
    <?php
        $user = [];
        function array_push_assoc($user, $username, $password){
            $user[$username] = $password;
            return $user;
       }
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
            //$user = array_push_assoc($user, $user_username, $user_password);
            $user = "\n" . $_POST["username"] ." " . $_POST["password"]; 
            file_put_contents("userdetail.txt", $user, FILE_APPEND);
            print_r($user);
         

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
                echo "<br>";
              
        }
        ?>

        <?php
			//footer function 
			footerFunction();
		?>
    </body>
</html>