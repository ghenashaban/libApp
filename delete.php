<?php

include_once 'connecting2db.php';

try {
    $conn=new PDO ("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql= "delete from membertable where firstname='lolo';";
    $conn->exec($sql);
    echo "deleted";
} catch (PDOException $e) {
   echo "didnt work". $e->getMessage();
}