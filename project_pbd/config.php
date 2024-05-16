<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '103.151.63.30';
$databaseName = 'kelompo2_Gita';
$databaseUsername = 'kelompok2';
$databasePassword = 'polinela';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>