<?php

$dbHost = 'localhost';
$dbName = 'id21530633_nagamacproject';
$dbUsername = 'root';
$dbPassword = '';
$db= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}

?>
