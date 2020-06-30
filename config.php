<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
try{
$connection = new mysqli($dbhost, $dbport, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();

$myName = "Jr's";
$myName = mysqli_real_escape_string($connection, $myName);

} 
}
catch(Exception $e){
echo "oops something went wrong";
}
?>

