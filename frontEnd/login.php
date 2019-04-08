<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> log in page </h1>
        <?php
       
        if(!empty($_SESSION['password'])){
            echo "<h1>You are logged in still please go to home page</h1>";
            echo "<a href='home.php'>home </a>";
        }
        ?>
        
         <?php
       
        if(empty($_SESSION)){
            
        
        
        echo "
      
        <form action='../backEnd/loginCode.php' method='post'>
            email <input type='text' name='email'>
            password <input type='password' name='password'>
            <button type='submit'name='submit'>login </button>
        </form>";
        }
        ?>
    </body>
</html>

  
            