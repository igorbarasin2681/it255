<?php
	function palindrom($tekst) {
		$tekst = str_replace(' ','', $tekst);
		$tekst = str_replace(',','', $tekst);
		$tekst = strtolower($tekst);
		
		$obrnuto = strrev($tekst);
		
		if($tekst == $obrnuto) {
			return 'Uneseni tekst je palindrom';
		}
		else {
			return 'Uneseni tekst nije palindrom';
		}
	}
	
	$tip = $_POST['tip'];
	$tekst = $_POST['tekst'];
	
	if($tip == "json"){
		header("Content-type: application/json");
		
		$test_array = array (
			'odgovor' => (palindrom($tekst))
		);
		
		echo json_encode($test_array);
	} else {
		header("Content-type: text/xml");
		
		$test_array = array (
			(palindrom($tekst)) => 'odgovor',
		);
	
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($test_array, array ($xml, 'addChild'));
		print $xml->asXML();
	}
	
?>