<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
try{
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname, $dbport);
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
} else{
echo "db connected";
}
catch(Exception $e){
echo "oops something went wrong";
}
?>