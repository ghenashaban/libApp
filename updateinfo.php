<!DOCTYPE html>
 <?php
session_start();

        include_once 'connecting2db.php';
        if(!empty($_SESSION)){
          $email=$_SESSION['email'];
          $password=$_SESSION['password'];
          
        }
        if(isset($_POST['submitemail'])){
          $oldEmail=$_POST['oldemail'];
          $newEmail=$_POST['newemail'];
          
        }
        
        if (isset($_POST['submitpassword'])) {
        $oldPassword=$_POST['oldpassword'];
          $newPassword=$_POST['newpassword'];
        }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      try {
          if(isset($_POST['submitemail'])){
          if ($_POST['oldemail']==$_SESSION['email']) {
    $sql="  update membertable
set email='$newEmail'
where '$oldEmail'=email and '$oldEmail'='$email';";
    $conn->exec($sql);
    echo "Your email has been updated, please log out and then log in again";
    echo "<a href='logout.php'> logout </a>";
          } else {
              echo "your old email is incorrect";
              
              
          }
          }
          if(isset($_POST['submitpassword'])){
           if ($_POST['oldpassword']== $_SESSION['password']) {
    $sql="  update membertable
set password='$newPassword'
where '$oldPassword'=password and '$oldPassword'='$password';";
    $conn->exec($sql);
    echo "Your Password has been updated, please log out and then log in again";
    echo "<a href='logout.php'> logout </a>";
          } else {
              echo "your old password is incorrect";
              
              
          }
          }
    
     
}catch (PDOException $e) {
    echo "did not work". $e->getMessage();
}
?>
    </body>
  
</html>
