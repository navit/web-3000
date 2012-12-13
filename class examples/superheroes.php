<?php
	$superheroes = array(
		array("name"=>"Superman",
			  "secret_identity"=>array("first_name"=>"Clark","last_name"=>"Kent"),
			  "powers"=>array("Heat vision","Frost breath","etc"),
			  "wins"=>10000,
			  "losses"=>0
			),
		array("name"=>"Spiderman",
			  "secret_identity"=>array("first_name"=>"Peter","last_name"=>"Parker"),
			  "powers"=>array("Web slinging","Sticks to walls","Spidey sense","Super strength"),
			  "wins"=>50,
			  "losses"=>50
			)
	);

	$superheroes[0]["secret_identity"]["first_name"]; // Clark
	$superheroes[1]["losses"]

	for($i=0;$i<count($superheroes);$i++) {
		$hero = $superheroes[i];
	}

	foreach($superheroes as $key=>$value) {
	}

//	$superheroes[1].lossses // womp
//	$superheroes[1]->losses // womp womp
?>