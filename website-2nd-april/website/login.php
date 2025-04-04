<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSC-319</title>
    <link rel="stylesheet" href="style.css">
<?php

include "config.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

       $email = $_POST['email'];
       $password = md5($_POST['password']);

     $sql = "select * from signup where email = '$email' and password = '$password' ";
    $result = $mysqli->query($sql);
    if($result->num_rows>0){
    $row = $result->fetch_assoc();
        $_SESSION['iduser'] = $row['id'];
        $_SESSION['nameuser'] = $row['name'];
        header("Location: std-records.php");
            exit();
    }
    else{
        echo "<p style='color:red;'>Invalid username or password</p>";
    }
}

?>

</head>
<body>
<?php
include "nav.php";
?>

    <div class="container">
        <h2>Login</h2>
        <form method="post" action="" id="registrationForm">
        
            <label for="email">Email:</label>
            <input class="input" type="email" id="email" name="email" >
            <label for="age">Password:</label>
            <input class="input" type="password" id="password" name="password" >   
            <input class="signup" type="submit" value="Login" name="submit">
        </form>
        
    </div>
    
    <div class="footer">
        &copy; 2025 COSC-319
    </div>
</body>
</html>
