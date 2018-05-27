<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: X-XSRF-TOKEN");

include ("functions.php");

if( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['emailadd']) &&
	isset($_POST['username']) && isset($_POST['password'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['emailadd'];
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		echo register($firstName,$lastName,$email, $username,$password);
}
?>