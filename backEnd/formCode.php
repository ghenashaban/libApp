<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include_once 'connecting2db.php';
        
  $firstName=$_POST['firstname'];
   $lastname=$_POST['lastname'];
    $age=$_POST['age'];
     $email=$_POST['email'];
      $address=$_POST['address'];
       $postcode=$_POST['postcode'];
        
         $password=$_POST['password'];
            
    try {
    $sql = "insert into membertable (Firstname, Lastname, age, email, streetaddress, postcode, password)
values ('$firstName','$lastname','$age','$email','$address','$postcode' ,'$password');";
    // use exec() because no results are returned
    
    
    $conn->exec($sql);
    echo "YOUR A MEMBER NOW please log in so you can search";
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        ?>
        <a href="login.php">log in</a>
       
</html>
