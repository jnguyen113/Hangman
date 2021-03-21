<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="UTF-8">
		<title>Hangman</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<?php 
        include 'common.php'; 	
    ?>
	<?php 
		session_start(); /* Starts the session */
		session_destroy(); /* Destroy started session */
		header("location:login.php");  
		/* Redirect to login page */exit;
	?>


	<?php
		//footer function 
		footerFunction();
	?>