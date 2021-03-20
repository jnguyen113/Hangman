<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>


    <body>


        <?php session_start(); /* Starts the session */
            $user = unserialize(file_get_contents('userdetail.txt'));
            echo '<h3>Use this to log in:</h3>';
            print_r($user);
            /* Check Login form submitted */	
            if(isset($_POST['Submit'])){
                //$user = array('nerdieluv' => 'love123');
                //data from array that stores user's username and password
                
                /* Check and assign submitted Username and Password to new variable */
                $username = isset($_POST['username']) ? $_POST['username'] : '';
                $password = isset($_POST['password']) ? $_POST['password'] : '';
                
                /* From Professor Henry's Example: Check Username and Password existence in defined array */		
                if (isset($user[$username]) && $user[$username] == $password){
                    /* Success: Set session variables and redirect to Protected page  */
                    $_SESSION['UserData']['username']=$logins[$username];
                    header("location:index.php");
                    exit;
                } else {
                    /*Unsuccessful attempt: Set error message */
                    $msg="<span style='color:red'>Invalid Login Details</span>";
                }
            }
        ?>
        <br>
        <form method="post" name="Login_Form">
        <p>NOTE: Login was extra feature: if you created username & password upon signup, the values above will change.
        <br>If not, use the values given in the array above first value: ['Username'] => second value: 'Password'</p>
        <p>Success: direct back to index.php, unsuccess: error message </p>

                <?php if(isset($msg)){?>
              
                <?php 
                //print error message if invalid user credential
                    echo $msg;
                ?>
                
               
                <?php } ?>
                <fieldset>
                <legend>Login</legend>
      
                    <h3>Login</h3>
                   <!---Username has 16-character box -->
                    <strong>Username: </strong>
                        <input type="text" name="username" size="16">
                        <br>
                        <br>
                    <!---password has 16-character box -->
                    <strong>Password: </strong>
                        <input type="text" name="password" size="16">
                        <br>
                        <br>
                    <input name="Submit" type="submit" value="Login">
                    <br>
                </fieldset>
        </form>

    </body>
</html>