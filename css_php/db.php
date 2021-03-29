<?php
$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'simplechat';
$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>