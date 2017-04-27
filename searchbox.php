<?php
    $key = $_GET['key'];
    $array = array();
    $con = mysql_connect("localhost","root","");
    $db = mysql_select_db("auto-dijelovi",$con);
	if($db == false){
		echo "Ne valja";
	}else{
		$query = mysql_query("
			SELECT * from `marka vozila`
			WHERE marka_vozila_naziv LIKE '%{$key}%'
		");
		
		//echo mysql_num_rows($query);
		while($row = mysql_fetch_assoc($query)){
			$array[] = $row['marka_vozila_naziv'];
		}
		
		echo json_encode($array);
	}
?>