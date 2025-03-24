<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSC-319</title>
    <link rel="stylesheet" href="style.css">

<script>
    function validateForm(event) {
        
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        if (name.trim() === "") {
            alert("Name cannot be empty");
            return false;
        }
        else if (name.length > 50) {
            alert("Name cannot exceed 50 characters");
            return false;
        }
        else if (country==="") {
            alert("Please select country!");
            return false;
        }
        return true;
    }
</script>

<?php
date_default_timezone_set('America/Chicago');
// Database connection settings
$servername = "localhost";  // Change if needed
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "319_db";  // Your database name

// Create a connection using MySQLi Object-Oriented approach
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $country = $mysqli->real_escape_string($_POST['country']);
    $major = $mysqli->real_escape_string($_POST['major']);
    $age = date('Y-m-d', $_POST['age']);
    $date_added = date('Y-m-d H:i:s');
    // Insert query using mysqli_query
       // Insert query using $mysqli->query()
       echo $sql = "INSERT INTO student (name, email, age, country, major, date_added) VALUES ('$name', '$email', '$age', '$country','$major','$date_added')";

       if ($mysqli->query($sql) === TRUE) {
           echo "Registration successful!";
       } else {
           echo "Error: " . $mysqli->error;
       }
   
       // Close connection
       $mysqli->close();
}
?>
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="records.html">Pages</a>
    </div>

    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="" id="registrationForm" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input class="input" type="text" id="name" name="name" >
            <label for="email">Email:</label>
            <input class="input" type="email" id="email" name="email" >
            <label for="age">Age:</label>
            <input class="input" type="date" id="date" name="date" >
            
           
            
            
            <label for="country">Country:</label>
            <select id="country" name="country" class="select">
                <option value="">Please Select</option>
                <option value="1">USA</option>
                <option value="2">Mexico</option>
                <option value="3">Brazil</option>
            </select><br>

            <label for="country">Major:</label>
            <select id="major" name="major" class="select">
                <option value="">Please Select</option>
                <option value="1">CS</option>
                <option value="2">Bussiness</option>
                <option value="3">Law</option>
            </select><br>
            
            <input class="signup" type="submit" value="Signup" name="submit">
        </form>
        
    </div>
    
    <div class="footer">
        &copy; 2025 COSC-319
    </div>
</body>
</html>
