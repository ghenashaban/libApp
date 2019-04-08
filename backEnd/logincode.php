<?php
session_start();

include_once 'connecting2db.php';

if (isset($_POST['email']) && isset($_POST['password'])){

$email = $_POST['email'];
$password = $_POST['password'];
$stmt = $conn->prepare ("SELECT * FROM membertable WHERE email='$email' and password='$password'");
$stmt->execute();
$data=$stmt->fetchAll();
if (count($data)==1){
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
ECHO "WELCOME ". $email;
header('location:../frontEnd/home.php');
}else{

echo "Invalid Login Details.";
}
} else {
    echo "Something went wrong, please try to login again";
    echo "<a href=login.php> login </a>";
}
 
       




//      if (!empty($_POST)){
//       $email=$_POST['email'];
//       $password=$_POST['password'];
//      };
//
//try {
//
//   if ($email== 'email'){
//     $stmt = $conn->prepare("SELECT firstname,email, password from membertable WHERE email='$email' AND password='$password';"); 
//    $stmt->execute();
// $data=$stmt->fetch();
//print_r($data);
//echo "   <a href='search.php'> search </a>";
//   } else {
//     echo "email not correct";  
//   }
//   
//
//
//  
//}
//catch(PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}