<?php
	include("config.php");

	if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
		die();
	}

	function addRoom($roomName, $hasTV, $beds){
		global $conn;
		$rarray = array();
		$stmt = $conn->prepare("INSERT INTO rooms (roomname, tv, beds) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $roomName, $hasTV, $beds);
		if($stmt->execute()){
			$rarray['success'] = "ok";
		}else{
			$rarray['error'] = "Database connection error";
		}
		
		return json_encode($rarray);
	}

	function getRooms(){
		global $conn;
		$rarray = array();
		$result = $conn->query("SELECT * FROM rooms");
		$num_rows = $result->num_rows;
		$rooms = array();
		if($num_rows > 0)
		{
		$result2 = $conn->query("SELECT * FROM rooms");
		while($row = $result2->fetch_assoc()) {
		$one_room = array();
		$one_room['id'] = $row['id'];
		$one_room['roomname'] = $row['roomname'];
		$one_room['tv'] = $row['tv'];
		$one_room['beds'] = $row['beds'];
		array_push($rooms,$one_room);
		}
		}
		$rarray['rooms'] = $rooms;
		return json_encode($rarray);
	
	}
?>