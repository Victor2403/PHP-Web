
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
        }
        .delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <?php
    include "config.php";
    ?>
    <?php

// // SQL query to fetch all records
// $sql = "SELECT * FROM student";
// $result = $mysqli->query($sql);

// // Check if records exist
// if ($result->num_rows > 0) {
//     // Fetch and display records
//     while ($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
//     }
// } else {
//     echo "No records found.";
// }
    ?>
<div class="nav">
        <a href="index.php">Home</a>
        <a href="records.html">Pages</a>
    </div>

    <div class="container">
        <h2>Database Records</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>USA</td>
                    <td>
                        <button class="btn edit">Edit</button>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>Canada</td>
                    <td>
                        <button class="btn edit">Edit</button>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>
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
