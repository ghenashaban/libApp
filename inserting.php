<?php
include_once 'connecting2db.php';


    try {
    $sql = "insert into membertable (FIRSTNAME,LASTNAME,age,EMAIL,streetaddress,postcode,joindate,PASSWORD)
values ('lolo','fofo','44','gree','jj','uu','43/5/2019', 'yy');";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "inserted successfully";
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    $conn = null;