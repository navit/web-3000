

<html>
  <head></head>
  <body>
    <form method="post" enctype="multipart/form-data">
      Select file for upload:
      <input type="index.php" name="f" />
      <input type="submit" name="submit" />      
    </form>

<?php
    if (isset($_POST['submit'])) {
      try {
        // open connection to MongoDB server       
        $connection = new Mongo();//making connection
	     //connecting to the db 
	     $db = $connection->game;
	     // access collection
	     $collection = $db->dictators;
  }
}
	// execute query
	 // retrieve all objects in the collection
	 $obj = $collection->find();
 	 
    echo "<h1>Hello " . $obj["first"] . ["last"] . "!</h1>";

   // insert a new document (row in the db)
  	// $dictators = array(
   //  'first' => 'Adolf',
   //  'last' => 'Hitler'
 	 // );
 	 // $collection->insert($dictators);
 	 // echo '<h1>Success!</h1>'];
   echo json_encode($obj); //encoding it to json
?>
  </body>
</html>
















