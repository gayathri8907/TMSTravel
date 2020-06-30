<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = tms;
try{
$connection = new mysqli($dbhost, $dbport, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();

} 
}
catch(Exception $e){
echo "oops something went wrong";
}
?>

