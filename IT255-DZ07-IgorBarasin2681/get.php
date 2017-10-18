<?php
	$tip = $_GET['tip'];
	
	if($tip == 'json') {
		header("Content-type: application/json");
		$test_array = array (
			array(
				'id' => 1,
				'naziv' => 'Lekcija 1 - Internet i World Wide Web - 2016-17',
				'pdf' => 'L1 - Tekst predavanja - 2016-17'
			), 
			array( 
				'id' => 2,
				'naziv' => 'Lekcija 2 - Web dizajn i CSS3 - 2016-17',
				'pdf' => 'L2 - Tekst predavanja - 2016-17'
			),
			array(
				'id' => 3,
				'naziv' => 'Lekcija 3 - Web arhitekture - 2016-17',
				'pdf' => 'L3 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 4,
				'naziv' => 'Lekcija 4 - Web korisnički interfejs - HTML5 i Javascript jezik - 2016-17',
				'pdf' => 'L4 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 5,
				'naziv' => 'Lekcija 5 - Prilagodljiv Web design - veza sa HTML5 - CSS3 i JavaScript jezikom - 2016-17',
				'pdf' => 'L5 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 6,
				'naziv' => 'Lekcija 6 - jQuery - JavaScript biblioteka - 2016-17',
				'pdf' => 'L6 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 7,
				'naziv' => 'Lekcija 7 - Serverski skriptovi - PHP jezik - 2016-17',
				'pdf' => 'L7 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 8,
				'naziv' => 'Lekcija 8 - Web aplikacije i baze podataka - 2016-17',
				'pdf' => 'L8 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 9,
				'naziv' => 'Lekcija 9 - Front-end okviri - Angular JS - 2016-17',
				'pdf' => 'L9 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 10,
				'naziv' => 'Lekcija 10 - SEO Optimizacija - 2016-17',
				'pdf' => 'L10 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 11,
				'naziv' => 'Lekcija 11 - Kreiranje naprednih formi - 2016-17',
				'pdf' => 'L11 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 12,
				'naziv' => 'Lekcija 12 - XML i JSON u web aplikacijama - 2016-17',
				'pdf' => 'L12 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 13,
				'naziv' => 'Lekcija 13 - Osnovni standardi Web servisa i AJAX-a - 2016-17',
				'pdf' => 'L13 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 14,
				'naziv' => 'Lekcija 14 - Napredni Web Servisi - 2016-17',
				'pdf' => 'L14 - Tekst predavanja - 2016-17'
			), 
			array(
				'id' => 15,
				'naziv' => 'Lekcija 15 - Kvalitet Bezbednost i Testiranje veb sistema - 2016-17',
				'pdf' => 'L15 - Tekst predavanja - 2016-17'
			)
			
		);
		
		echo json_encode($test_array);
		
	} else {
		header("Content-type: text/xml");
		$test_array = array (
			array(
				1 => 'id',
				'Lekcija 1 - Internet i World Wide Web - 2016-17' => 'naziv',
				'L1 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				2 => 'id',
				'Lekcija 2 - Web dizajn i CSS3 - 2016-17' => 'naziv',
				'L2 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				3 => 'id',
				'Lekcija 3 - Web arhitekture - 2016-17' => 'naziv',
				'L3 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				4 => 'id',
				'Lekcija 4 - Web korisnički interfejs - HTML5 i Javascript jezik - 2016-17' => 'naziv',
				'L4 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				5 => 'id',
				'Lekcija 5 - Prilagodljiv Web design - veza sa HTML5 - CSS3 i JavaScript jezikom - 2016-17' => 'naziv',
				'L5 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				6 => 'id',
				'Lekcija 6 - jQuery - JavaScript biblioteka - 2016-17' => 'naziv',
				'L6 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				7 => 'id',
				'Lekcija 7 - Serverski skriptovi - PHP jezik - 2016-17' => 'naziv',
				'L7 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				8 => 'id',
				'Lekcija 8 - Web aplikacije i baze podataka - 2016-17' => 'naziv',
				'L8 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				9 => 'id',
				'Lekcija 9 - Front-end okviri - Angular JS - 2016-17' => 'naziv',
				'L9 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				10 => 'id',
				'Lekcija 10 - SEO Optimizacija - 2016-17' => 'naziv',
				'L10 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				11 => 'id',
				'Lekcija 11 - Kreiranje naprednih formi - 2016-17' => 'naziv',
				'L11 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				12 => 'id',
				'Lekcija 12 - XML i JSON u web aplikacijama - 2016-17' => 'naziv',
				'L12 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				13 => 'id',
				'Lekcija 13 - Osnovni standardi Web servisa i AJAX-a - 2016-17' => 'naziv',
				'L13 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				14 => 'id',
				'Lekcija 14 - Napredni Web Servisi' => 'naziv',
				'L14 - Tekst predavanja - 2016-17' => 'pdf'
			),
			array(
				15 => 'id',
				'Lekcija 15 - Kvalitet Bezbednost i Testiranje veb sistema - 2016-17' => 'naziv',
				'L15 - Tekst predavanja - 2016-17' => 'pdf'
			)
			
		);
		
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($test_array, array ($xml, 'addChild'));
		print $xml->asXML();	
	}
?>