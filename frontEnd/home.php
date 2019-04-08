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
        <h1> This is the home page </h1>
         <?php
       
        if(!empty($_SESSION)){
            echo "Welcome $_SESSION[email]";
            echo "<br>";
           echo"<a href='../backEnd/logout.php'>logout</a>";
           echo "<br>";
           echo"<a href='search.php'>search</a>";
           echo "<br>";
           echo "<a href='return.php'>return</a>";
           echo "<br>";
           echo "<a href='../backEnd/history.php'>History</a>";
           echo "<br>";
           echo "<a href='updateinfoForm.php'>Update info</a>";
          
        }else{
            echo "Welcome Guest";
            echo "<br>";
          echo"<a href='login.php'>login</a>";
          echo "<br>";
         echo '<a href="form.php">sign up</a>';
        }
        ?>
        
        
     
      
       
         
        
    </body>
</html>
