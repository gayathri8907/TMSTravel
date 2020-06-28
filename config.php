
<?php 
// DB credentials.
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','tms');
$dsn = "mysql:host=127.0.0.1;port=3306;charset=utf8;dbname=tms";
// Establish database connection.
try
{
$dbh = new PDO($dsn,"root","");
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>