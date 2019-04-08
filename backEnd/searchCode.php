<!DOCTYPE html>
<?php

include_once '../frontEnd/search.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'connecting2db.php';
        if(!empty($_POST)){
          $bookname=$_POST['bookname']; 
         $email=$_SESSION['email'];
        }
       

      
try {

       $conn= new PDO("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("SELECT title, stock, areaname, image
from booktable
inner join stocktable
on booktable.book_ID=stocktable.book_ID
inner join locationtable
on locationtable.Location_ID=stocktable.Location_ID
where title=?;"); 
    $stmt->execute([$bookname]);

    // set the resulting array to associative
  // one way
//while ($row = $stmt->fetch()) {
//    echo $row['firstname']." ". $row['lastname']."<br />\n";
//}
    
  // this way is better
    $data=$stmt->fetchAll();
// and somewhere later:
   
foreach ($data as $row) {

    $book=$row['title'];
    $copy=$row['stock'];
    $location=$row['areaname'];
      $images= $row['image'];
       
   $image="<img src='../$images' alt='harry potter' width=80px >";

 echo "<table>
  <tr>
    <th>Book title</th>
    <th>Copies</th>
    <th>Location</th>
    <th>Image</th>
    <tr>
    <td>$book</td>
    <td>$copy</td>
    <td>$location</td>
         <td>$image</td>
  </tr>
 
  
</table>".
        " <form  action='request.php' method='post'>
            <input type='hidden' name='location' value='$location'>
  <button type='submit' value='$book' name='submit'>Request</button>
</form>";
         
// form that has all values
 
  



}   
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
        ?>
 
      
    </body>
</html>
