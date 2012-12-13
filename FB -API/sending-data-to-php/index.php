<?php
	if(empty($_GET['bagel'])) {
		echo 'Bagel does not exist.';
	}
	else {
		echo $_GET['bagel'];
	}
?>

<?php 
// var postData = {};
// postData.username = $("input.username").val();
// postData.password = $("input.password").val();

// var json = JSON.stringify(postData);

// $.post("/api.php",{json:json},function(response) {
//	
// });
?>