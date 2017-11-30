<?php
	include("config.php");
	
	function addUser($firstName,$lastName,$email,$username,$password){
		global $conn;
		if(!checkIfUserExists($username)){
			$insert = "INSERT INTO users(firstName,lastName,email,username,password) VALUES(?,?,?,?,?)";
			$query = $conn->prepare($insert);
			$query->bind_param('sssss',$firstName,$lastName,$email,$username,md5($password));
			$query->execute();
			$query->close();
		} else {
			messEcho("Username already taken!", "../pages/login.html");
		}
	}
	
	function messEcho($message, $winloc) {
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>window.location = '$winloc';</script>";
	}
	
	function checkUser($username, $password){
		global $conn;
		$sql = "SELECT * FROM users WHERE username=? AND password=?";
		$query = $conn->prepare($sql);
		$query->bind_param('ss',$username,md5($password));
		$query->execute();
		$query->store_result();
		if ($query->num_rows > 0) {
			return 1;
		} else{
			return 0;
		}
		$query->close();
	}
	
	function checkIfUserExists($username){
		global $conn;
		$sql = "SELECT * FROM users WHERE username=?";
		$query = $conn->prepare($sql);
		$query->bind_param('s',$username);
		$query->execute();
		$query->store_result();
		if ($query->num_rows > 0) {
			return true;
		} else{
			return false;
		}
		$query->close();
	}
	
	function getAllForUsername($username){
		global $conn;
		$sql = "SELECT firstName,lastName,email FROM users WHERE username=?";
		$query = $conn->prepare($sql);
		$query->bind_param('s',$username);
		$query->execute();
		$query->store_result();
		$query->bind_result($ime, $prezime, $email);
		$returnvalue = "";
		while ($query->fetch()) {
			$returnvalue = $ime." ".$prezime." ".$email;
		}
		$query->free_result();
		$query->close();
		return $returnvalue;
	}
	
	function getAllUsers(){
		global $conn;
		$userinfo = "SELECT * FROM users";
		if($stmt = $conn->prepare($userinfo))
		{
			$stmt->execute();
			if(!$stmt->execute())
			{
				echo $stmt->error.' in query: '.$userinfo;
			}
			else {
				$parameters = array();
				$result = $stmt->get_result();
				while ($row = $result->fetch_assoc()) {
					array_push($parameters,$row);
				}
				$stmt->close();
				return $parameters;
			}
			$stmt->close();
		}
	}
?>