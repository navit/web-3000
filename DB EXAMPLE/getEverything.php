<?php

	$mongo = new Mongo();
	$db = $mongo->greatDatabase;
	$things = $db->things->find();

	$response = array();

	if($things) {
		$response['status'] = 'okay';
		$response['things'] = array();

		foreach($things as $thing) {
			array_push($response['things'],$thing);
		}
	}
	else {
		$response['status'] = 'catatstrophic fuck up';
		$response['message'] = 'Sorry! Check back later!';
	}

	echo json_encode($response);


?>