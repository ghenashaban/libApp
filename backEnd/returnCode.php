<?php
session_start();

        include_once 'connecting2db.php';
        if(!empty($_POST)){
          $bookname=$_POST['bookname']; 
         $location=$_POST['location'];
//         $date=$_POST['date'];
         $email=$_SESSION['email'];
        }
       
$date = date("Y/m/d");

      
try {

       $conn= new PDO("mysql:host=$servername;dbname=librarydatabasegh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $sql="UPDATE loanTable
inner join membertable on loantable.Member_ID=membertable.Member_ID
inner join stocktable on loantable.Stock_ID=stocktable.Stock_ID
inner join booktable on booktable.Book_ID=stocktable.Book_ID
inner join locationtable on locationtable.Location_ID=stocktable.Location_ID
SET returndate='$date'
where '$email'=membertable.email and '$location'=locationtable.AreaName and '$bookname'=booktable.Title;

Update loantable
SET status_ID = 1
WHERE datediff < 8;

Update loantable
SET status_ID = 2
WHERE datediff > 7;

 
Update membertable
INNER JOIN loanTable ON MemberTable.Member_ID = loanTable.Member_ID
set membertable.member_status_id = 1
WHERE loanTable.Datediff > 20;";
    $conn->exec($sql);
     $sql2="UPDATE stocktable
inner join booktable
on booktable.book_ID=stocktable.book_ID
inner join locationtable
on locationtable.Location_ID=stocktable.Location_ID

SET stock=stock +1
WHERE locationtable.AreaName='$location' and booktable.Title='$bookname'";
 $conn->exec($sql2);
  $sql3="update booktable set no_of_copies= no_of_copies +1 where title='$bookname'";
   $conn->exec($sql3);
    // set the resulting array to associative
  // one way
//while ($row = $stmt->fetch()) {
//    echo $row['firstname']." ". $row['lastname']."<br />\n";
//}
    
  // this way is better
   echo "the book has been returned";

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
       
echo "<a href='../frontEnd/home.php'> home </a>";