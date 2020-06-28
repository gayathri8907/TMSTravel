
<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','tms');
$dsn = "mysql:host=localhost;port=3306;charset=utf8;dbname=tms";
// Establish database connection.
try
{
$dbh = new PDO($dsn,"root","root");
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>