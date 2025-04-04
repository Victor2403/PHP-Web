<div class="nav">
        <a href="std-registration.php">Student Registration</a>
        <a href="std-records.php">Student Records</a>
        <a href="signup.php">Signup</a>
    <?php
    if(!isset($_SESSION['iduser'])){?>
        <a href="login.php">Login</a>
    <?php }
    ?>


     
<a href="logout.php">Logout</a>
      
        
    </div>