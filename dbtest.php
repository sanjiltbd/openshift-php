<?php
$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = "root";
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");


$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);

if(!$connection) {
	echo "Could not connect to database.";
} else {
	echo "Connected to database.<br/>";
}

?>
