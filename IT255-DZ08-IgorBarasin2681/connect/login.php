<?php
	session_start();
	include("functions.php");
	
	if(isset($_POST['submit'])){
		$username = $conn->real_escape_string($_POST['username']);
		$password = $_POST['password'];
		if(!empty($username) && !empty($password)){
			if(checkUser($username,$password)){
				$_SESSION['username'] = $username;
			} else{
				messEcho("Wrong username or password!", "../pages/login.html");				
			}
		} else{
			messEcho("Fill in all the fields!", "../pages/login.html");			
		}
	}
	
	if(isset($_SESSION['username'])){
		$message = "You are logged in as: ".$_SESSION['username'];
		messEcho($message, "../pages/home.html");			
	}
	
?>
