<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = "root";
$dbpwd = getenv("dbrootpass");
$dbname = getenv("dbname");


$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if(!$connection) {
	echo "Could not connect to database.";
} else {
	echo "Connected to database.<br/>";
}

?>
