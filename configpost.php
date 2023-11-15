<?php

$dbHost = 'localhost';
$dbName = 'id21530633_nagamacproject';
$dbUsername = 'id21530633_nagamac';
$dbPassword = 'Namoc@120';
$db= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}

?>