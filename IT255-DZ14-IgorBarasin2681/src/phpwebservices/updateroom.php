<?php
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, Token, token, TOKEN');
	include("functions.php");
	
	if( isset($_POST['roomName']) && isset($_POST['hasTV']) && isset($_POST['beds']) && isset($_POST['id'])) {
		$roomName = $_POST['roomName'];
		$hasTV = intval($_POST['hasTV']);
		$beds = intval($_POST['beds']);
		$id = intval($_POST['id']);
		
		if(isset($_POST['room_type_id']) && !empty($_POST['room_type_id'])){
			$room_type_id = intval($_POST['room_type_id']);
		} else{
			$room_type_id = null;
		}
				
		echo updateRoom($roomName, $hasTV, $beds, $room_type_id, $id);
	}
?>