<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Update Email:
        <form action='../backEnd/updateinfo.php' method='post'>
            Old Email <input type='text' name='oldemail'>
            New Email <input type='text' name='newemail'>
            <button type='submit'name='submitemail'>Update </button>
        </form>
        
        Update Password:
        <form action='../backEnd/updateinfo.php' method='post'>
            Old Password <input type='password' name='oldpassword'>
            New Password <input type='password' name='newpassword'>
            <button type='submit'name='submitpassword'>Update </button>
        </form>
    </body>
</html>
