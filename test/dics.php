<?php
$mongo= new Mongo();
$db = $mongo->game;
$data =$db->dictators->find();



$response = array();
	if(data){
		$response['status']= 'okay';
		$response['data']= array();
		
		foreach($data as $dics){
			array_push($response,['data'],$dics);
		}
		} else{
			$response['status']= "not working";
			$response['message']= "sorry try again";
		}
		
	echo json_encode($response);



?>