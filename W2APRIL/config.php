<?php
// date_default_timezone_set('America/Chicago');
// Database connection settings
$servername = "localhost";  // Change if needed
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "dbasephp";  // Your database name
// Create a connection using MySQLi Object-Oriented approach
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// function getName($id,$mysqli){
//     $query = "select * from signup where id = '".$id."' ";
//     $sql = $mysqli->query($query);
//     $row = $sql->fetch_assoc();
//     return $row['name'];
// }
// echo "ID is: ".getName(3, $mysqli);
session_start();

?>