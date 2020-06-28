<?php

// connect
$m = new MongoClient();

// select a database
$db = $m->travel;

// select a collection (analogous to a relational database's table)
$collection = $db->userlogin;

// add a record
$document = array( "username" => "kalyan", "password" => "admin123" );
$collection->insert($document);

// add another record, with a different "shape"
$document = array( "username" => "kalyan1", "password" => "admin1234" );
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();

// iterate through the results
foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}

?>