<?php
	$mongo = new Mongo();
	$db = $mongo->awesomest;

	$totalThings = $db->things->count();
// db.yourCollection.find().limit(-1).skip(yourRandomNumber).next(). 
//fetching from the db
	$thing1 = $db->things->find()->limit(1)->skip(rand(0,$totalThings-1))->getNext();
	$thing2 = $db->things->find()->limit(1)->skip(rand(0,$totalThings-1))->getNext();



	$thing1['id'] = $thing1['_id']->__toString();
	$thing2['id'] = $thing2['_id']->__toString();

	unset($thing1['_id']);
	unset($thing2['_id']);

	$output = array();
	array_push($output,$thing1);
	array_push($output,$thing2);


	header('Content-type:application/json');
	header('Access-Control-Allow-Origin: *'); 
	echo json_encode($output);
?>