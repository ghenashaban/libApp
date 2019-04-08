<!DOCTYPE html>
<?php 
include_once 'search.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="returnCode.php" method='post'>
<!--             name of book <input type="text" name="bookname">
  location of book <input type="text" name="location">-->
            <select name="bookname">
  <option value="Harry Potter">Harry Potter</option>
  <option value="Encyclopedia">Encyclopedia</option>

</select>
                <select name="location">
  <option value="Baker Street">Baker Street</option>
  <option value="West London">West London</option>

</select>


  <button type="submit">return</button>
</form>
     
    </body>
</html>
