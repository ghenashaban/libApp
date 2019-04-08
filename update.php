<?php

include_once 'connecting2db.php';

try {
    $sql="update membertable set firstname='ghena' where firstname='lolo'";
    $conn->exec($sql);
    echo "done";
}catch (PDOException $e) {
    echo "did not work". $e->getMessage();
}
