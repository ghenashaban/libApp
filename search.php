<!DOCTYPE html>
<?PHP 
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>
        

<!-- The form -->
<form class="example" action="searchCode.php" method='post'>
 Search by book name <input type="text" placeholder="Search.." name="bookname">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
       <li><a href="logOut.php"> Log out</a>
             <li><a href="HOME.php"> HOME</a>
                   <li><a href="return.php"> return</a>
                  
    </body>
</html>
