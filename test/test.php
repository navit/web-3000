<!-- connection to mongo -->
<?php
$connection = new Mongo();//connection to mongo
$db = $connection->game; //db
$collection = $db->dictators; //collection


$obj = $collection->find();
echo "<h1>Hello " . $obj["first"] . "!</h1>";

/*
echo "<h2>Show result as an array:</h2>";
echo "<pre>";
print_r($obj);
echo "</pre>";

echo "<h2>Show result as JSON:</h2>";
echo "<pre>";
*/
echo json_encode($obj);
echo "</pre>";

?>