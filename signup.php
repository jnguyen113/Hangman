<!DOCTYPE html>
<html lang="en-us">

    <head>
        <meta charset="UTF-8">
        <title>Sign Up Page</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <br>
        <!---Form to create new account & encodes data through POST-->
        <form action="signup-submit.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>New User Signup: </legend>
                <!---username has 16-character box -->
                <strong>Username: </strong>
                    <input type="text" name="username" size="16">
                    <br>
                    <br>
                <!---password has 16-character box -->
                <strong>Password: </strong>
                    <input type="text" name="password" size="16">
                    <br>
                    <br>
                <!---submit button -->
                <input type="submit" value="Sign Up">
            </fieldset>
        </form>
        <br>
    </body>
</html>
