


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSC-319</title>
    <link rel="stylesheet" href="style.css">

<?php
include "config.php";
$query = "select * from student where id = '".$_GET['eid']."' ";
$sql = $mysqli->query($query);
$row = $sql->fetch_assoc();
// echo "<pre>";
// print_r($row );
// echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "UPDATE student
    SET name = '".$_POST['name']."', email = '".$_POST['email']."'
    WHERE id = '".$_GET['eid']."' ";
    $mysqli->query($query);

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
            <input class="input" type="text" id="name" name="name" value = "<?php echo $row['name'];?>" >
            <label for="email">Email:</label>
            <input class="input" type="email" id="email" name="email" value = "<?php echo $row['email'];?>"  >
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
