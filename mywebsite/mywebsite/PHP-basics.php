 <html>
<head>
    <title>Form to Save Records in MYSQL</title>
</head>

    
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // print_r($_POST);

    echo $query = "INSERT INTO student (name, age) 
    values ('".$_POST['name']."',
    '".$_POST['age']."') ";

}
?>

<form action="" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age" >
<input type="submit" value="Submit">
</form>

</body>

 </html>



