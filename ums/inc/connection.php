<?php
// Set the correct password here. Use an empty string if there is no password.
$connection = mysqli_connect('localhost', 'root', '', 'userdb',3307);

// Checking the connection
if (mysqli_connect_errno()) {
    die('Database connection failed: ' . mysqli_connect_error());
} else {
    echo "Connection Successful";
}
?>