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

      
        $sql = "insert into signup 
    
        (name, email, password, date_added) 
        values ('$name', '$email', '$password', '$date_added')";

        if ($mysqli->query($sql) === TRUE) {
            echo "Records successful!";
        } else {
            echo "Error: " . $mysqli->error;
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
