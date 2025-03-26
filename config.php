<?php
date_default_timezone_set('America/Chicago');
// Database connection settings
$servername = "localhost";  // Change if needed
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "01garcia db";  // Your database name
// Create a connection using MySQLi Object-Oriented approach
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>