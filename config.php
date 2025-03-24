<?php
// date_default_timezone_set
// database connection settings
$servername = "localhost";  // change if needed
$username = "root";         // db username
$password = "";             // db password
$dbname = "319_db";         // db name

// create a connection using MySqli Object oriented approach
$mysqli = new mysqli(hostname: $servername, username:)

//check connection
if ($mysqli->connect_error) {
    die("connection failed: " . $mysqli->connect_error);
}