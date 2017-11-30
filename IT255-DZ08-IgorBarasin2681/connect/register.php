<?php
	session_start();
	include("functions.php");
	
	if(isset($_POST['submit'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($firstName) && !empty($lastName) && !empty($username) && !empty($password) && !empty($email)){
			addUser($firstName,$lastName,$email,$username,$password);

			$_SESSION['username'] = $username;
			if(isset($_SESSION['username'])){
				$message = "Sign up successful! You are logged in as: ".$_SESSION['username'];
				messEcho($message, "../pages/home.html");		
			}
		} else {
			messEcho("Fill in all the fields", "../pages/login.html");
			
		}
	}

?>
