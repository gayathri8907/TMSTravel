<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
try{
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname, $dbport);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} }
catch(Exception $e){
echo "oops something went wrong";
}
?>