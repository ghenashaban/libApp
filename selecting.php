<?php
include_once 'connecting2db.php';

try {

       $conn= new PDO("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("SELECT firstname, lastname from membertable"); 
    $stmt->execute();

    // set the resulting array to associative
  // one way
//while ($row = $stmt->fetch()) {
//    echo $row['firstname']." ". $row['lastname']."<br />\n";
//}
    
  // this way is better
    $data=$stmt->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['firstname'].$row['lastname']."<br />\n";
}
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
