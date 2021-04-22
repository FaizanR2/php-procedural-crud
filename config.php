<?php

$databaseHost = 'localhost';
$databaseName = 'mydb';
$databaseUsername = 'root';
$databasePassword = 'damocles';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}
?>