
<?php
include "config.php";
   if(!isset($_SESSION['iduser'])){
    header("Location: login.php");
    exit();
   }
?>

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



if ($_SERVER["REQUEST_METHOD"] == "POST") {

       $name = $_POST['name'];
       $email = $_POST['email'];
       $age = date('Y-m-d',$_POST['age']);
       $country = $_POST['country'];
       $major = $_POST['major'];
       $date_added = date('Y-m-d H:i:s');

      $sql = "insert into student 
    
        (name, email, age, country, major, date_added, who_added) 
        values ('$name', '$email', '$age','$country', '$major', '$date_added', '".$_SESSION['iduser']."')";

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
        <h2>Students Registration Form</h2>
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
                <option value="usa">USA</option>
                <option value="mexico">Mexico</option>
                <option value="brazil">Brazil</option>
            </select><br>

            <label for="country">Major:</label>
            <select id="major" name="major" class="select">
                <option value="">Please Select</option>
                <option value="cs">CS</option>
                <option value="bussiness">Bussiness</option>
                <option value="law">Law</option>
            </select><br>
            
            <input class="signup" type="submit" value="Signup" name="submit">
        </form>
        
    </div>
    
    <div class="footer">
        &copy; 2025 COSC-319
    </div>
</body>
</html>
