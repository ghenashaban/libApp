<!DOCTYPE html>
 <?php
session_start();

        include_once 'connecting2db.php';
        if(!empty($_SESSION)){
          $email=$_SESSION['email'];  
        }
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 
       if (empty($_SESSION)){
           $email=$_SESSION['email']; 
          
       }

      
try {

       $conn= new PDO("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $conn->prepare("SELECT areaname, loandate, returndate, title, statusname, image
from booktable
inner join stocktable
on booktable.book_id=stocktable.book_id

inner join loantable
on loantable.Stock_id=stocktable.Stock_ID

INNER join membertable
on membertable.Member_ID=loantable.Member_ID
inner join statustable
on loantable.Status_ID=statustable.Status_ID
inner join locationtable 
on locationtable.location_id=stocktable.location_id
where '$email'=email"); 
     

    $stmt->execute();

    
    $data=$stmt->fetchAll();

   
foreach ($data as $row) {

    $loanDate=$row['loandate'];
    $ReturnDate=$row['returndate'];
    $title=$row['title'];
    $location=$row['areaname'];
    $status=$row['statusname'];
      $images= $row['image'];    
   $imageSrc="<img src='$images' alt='' width=80px >";
 echo "<table>
  <tr>
    <th>Loan Date</th>
    <th>Return Date</th>
    <th>Book Title</th>
    <th>Location</th>
    <th>Status</th>
    <th>Image</th>
    <tr>
    <td>$loanDate</td>
    <td>$ReturnDate</td>
    <td>$title</td>
    <td>$location</td>
    <td>$status</td>
    <td>$imageSrc</td>
  </tr>
 
  
</table>";
         

 
  



}   
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
        ?>
        <a href="home.php"> Home </a>
    </body>
</html>
