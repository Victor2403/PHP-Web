<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSC-319</title>
    <link rel="stylesheet" href="style.css">
<?php

include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $date_added = date('Y-m-d H:i:s');

    // Check if email already exists
    $checkEmailSql = "SELECT * FROM signup WHERE email = '$email'";
    $result = $mysqli->query($checkEmailSql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
        // Proceed to insert the new record
        $sql = "INSERT INTO signup (name, email, password, date_added) 
                VALUES ('$name', '$email', '$password', '$date_added')";

        if ($mysqli->query($sql) === TRUE) {
            echo "<script>alert('Signup successful!');</script>";
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
}
?>


</head>
<body>
<?php
include "nav.php";
?>

    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="" id="registrationForm">
            <label for="name">Name:</label>
            <input class="input" type="text" id="name" name="name" >
            <label for="email">Email:</label>
            <input class="input" type="email" id="email" name="email" >
            <label for="age">Password:</label>
            <input class="input" type="password" id="password" name="password" >   
            <input class="signup" type="submit" value="Signup" name="submit">
        </form>
        
    </div>
    
    <div class="footer">
        &copy; 2025 COSC-319
    </div>
</body>
</html>
