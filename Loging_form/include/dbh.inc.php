<?php

$serverName = "localhost";
$dbUserName = "root";
$dbpassword = '';
$dbName = "logindb";

$conn = mysqli_connect($serverName,$dbUserName, $dbpassword, $dbName,3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

    
}
