<?php



include_once 'connecting2db.php';
include_once '../frontEnd/search.php';


if(!empty($_POST)) {
$bookname=$_POST['submit'];
$location=$_POST['location'];
$email=$_SESSION['email'];
};

echo "this is your email".$email;

try {
  
    
    $sql="call request ('$bookname','$location','$email')";
    $conn->exec($sql);
    

    echo "The book requested is $bookname from $location location";
}catch (PDOException $e) {
    echo "Sorry! Something went Wrong!". $e->getMessage();
}


