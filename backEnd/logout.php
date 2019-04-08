<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (!empty($_SESSION)){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
      
        session_destroy();
        }
        
        if(empty($_SESSION)){
            echo "<h1>You have successfully logged out. <br> Please log in again or go to the Home Page!</h1>";
        }
        ?>
        <a href="../frontEnd/home.php">home page</a>
    </body>
</html>