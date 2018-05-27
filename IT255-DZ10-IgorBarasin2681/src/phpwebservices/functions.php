<?php
	include("config.php");
	
	function getRooms() {
		global $conn;
		$roominfo = "SELECT * FROM rooms";
		if($stmt = $conn->prepare($roominfo))
		{
			$stmt->execute();
			if(!$stmt->execute())
			{
				echo $stmt->error.' in query: '.$roominfo;
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