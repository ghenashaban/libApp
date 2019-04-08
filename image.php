<!DOCTYPE html>
<?php
include_once 'connecting2db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
       $conn= new PDO("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("SELECT image from booktable where title='harry potter'"); 
    $stmt->execute();

    $data=$stmt->fetchAll();
// and somewhere later:
foreach ($data as $row) {
   $images= $row['image'];
   echo "<img src='$images' alt='harry potter' width=50% >";
}





        ?>
    </body>
</html>
