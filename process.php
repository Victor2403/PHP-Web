<?php
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
           echo "Records successful!";
       } else {
           echo "Error: " . $mysqli->error;
       }
   
       // Close connection
       $mysqli->close();
}
?>