<?php
	if(!extension_loaded("soap")){
	  dl("php_soap.dll");
	}
	ini_set("soap.wsdl_cache_enabled",0);
	$server = new SoapServer("ispis.wsdl");
	
	function doHello($yourName){
		$username = "root";
		$password = "";
		$hostname = "localhost"; 
		$dbname = "auto-dijelovi";
		$dbhandle = mysql_connect($hostname, $username, $password) 
		  or die("Unable to connect to MySQL");
		  
		$selected = mysql_select_db($dbname, $dbhandle)
		  or die("Could not select database");
	  
		$result = mysql_query("
			SELECT * FROM artikl
			JOIN `model vozila` ON ID_model_vozila = artikl_ID_model_vozila
			WHERE model_vozila_naziv = \"". $yourName."\""
		);

		$response = array();
		  
		while ($row = mysql_fetch_array($result)) {
			$tmp = array();
			$tmp["artikl_naziv"]         = $row["artikl_naziv"]; 
			$tmp["artikl_opis"]          = $row["artikl_opis"];
			$tmp["artikl_cijena"]        = $row["artikl_cijena"];
			$tmp["artikl_valuta"]        = $row["artikl_valuta"];
			$tmp["artikl_stanje"]        = $row["artikl_stanje"];
			$tmp["artikl_kolicina"]      = $row["artikl_kolicina"];
												  
			array_push($response, $tmp);
			
			$privremeni = $privremeni
			."\n artikl_naziv: " . $row["artikl_naziv"]
			."\n artikl_opis: " . $row["artikl_opis"]
			."\n Broj_katova: " . $row["artikl_cijena"]
			."\n artikl_valuta: " . $row["artikl_valuta"]
			."\n artikl_stanje: " . $row["artikl_stanje"]
			."\n artikl_kolicina: " . $row["artikl_kolicina"]
			."\n\n";
		}
			
		$jsonn = json_encode($response);
		  
		return $jsonn;
		return $privremeni;
	}
	
	$server->AddFunction("doHello");
	$server->handle();
?>