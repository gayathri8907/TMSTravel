<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = 3306;
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
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

