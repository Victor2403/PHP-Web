
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
    <title>Blogs</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <style>
         table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .edit {
            background-color: #4CAF50;
            text-decoration: none;
        }
        .delete {
            background-color: #f44336;
            text-decoration: none;
        }
    </style>
</head>
<body>
   
    <?php
     include "config.php";
     
     if($_GET['did']){
     $qDelete = "delete from student where id = ".$_GET['did']." ";
     $mysqli->query($qDelete);
    }
    ?>
<?php
include "nav.php";
?>

    <div class="container">
        <h2>Database Records</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                   
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
             <?php
             $query = "select * from student";
             $sql = $mysqli->query($query);

            while($row = $sql->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['age'];?></td>
                  
                    <td>
                        <a class="btn edit" href="std-registration-edit.php?eid=<?php echo $row['id'];?>">Edit</a>
                        <a class="btn delete" onclick="return confirm('Are you sure you want to delete this item?');" href="std-records.php?did=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>

           <?php  }
             ?>
               

             

                
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        &copy; 2025 Simple Form Page
    </div>
    
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
</html>
