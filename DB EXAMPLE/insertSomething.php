<?php
	$mongo = new Mongo();
	$db = $mongo->greatDatabase;
	$db->things->insert(array("thing"=>$_GET['whatIsGreat'])); // db.things.insert({thing:"horses"});

	$response = array();
	$response['status'] = 'okay';

	echo json_encode($response);
?>