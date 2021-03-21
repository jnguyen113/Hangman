<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>


    <body>
    
    <?php 
        include 'common.php'; 	
    ?>


    <?php session_start(); /* Starts the session */
        
        $file = "userdetail.txt";
        $fh = fopen($file, 'r');
        $data = fread($fh, filesize($file));
        $user = array();
        $my_array = explode("\n", $data);
        foreach($my_array as $line)
        {
            $tmp = explode(" ", $line);
            $user[$tmp[0]] = $tmp[1];
            
        }
        fclose($fh);
        print_r($user);
        /* Check Login form submitted */
        if(isset($_POST['submit'])){
          
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            /* Check username and password existence in defined array */
            if (isset($user[$username]) && $user[$username] == $password){
            /* Success: Set session variables and redirect to Protected page  */
            $_SESSION['UserData']['username']=$user[$username];
            header("location:index.php");
            exit;
            } else {
            /*Unsuccessful attempt: Set error message */
            $msg="<span style='color:red'>Invalid Login Details</span>";
        }
    }
    ?>
    <form action="" method="post" name="Login_Form">
        <div id="form">
            <?php if(isset($msg)){?>
            <tr>
            <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
            </tr>
            <?php } ?>
            <tr>
            <legend>Login: </legend>
                <!---username has 16-character box -->
                <strong>Username: </strong>
                    <input type="text" name="username" class="input" size="16">
                    <br>
                    <br>
                <!---password has 16-character box -->
                <strong>Password: </strong>
                    <input type="text" name="password" class="input" size="16">
                    <br>
                    <br>
                <!---submit button -->
                <input name="submit" type="submit" value="Login" class="function">
            </fieldset>
        </div
    </form>

    <?php
			//footer function 
			footerFunction();
            backButton();
    ?>

    </body>
</html>