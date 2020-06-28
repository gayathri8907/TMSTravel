<?php 
// DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','');
//define('DB_NAME','tms');
//$dsn = "mysql:host=localhost;port=3308;charset=utf8;dbname=tms";
// Establish database connection.
try
{
//$dbh = new PDO($dsn,"root","");
    $m =new MongoClient( "mongodb://172.30.70.36" );
  echo "Connection to database successfully";
  $db = $m->tms;
  echo "Database tms selected";
}
catch (Exception $e)
{
exit("Error: my error" . $e->getMessage());
}
?>