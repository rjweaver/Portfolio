<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
     session_start();
    if(!session_is_registered(myusername)){
    header("location:SimpleLogin.php");
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Success</title>
        
        
    </head>
    <body>
        <h1>Login Success!</h1>
        
        <a href="SimpleLogin.php">Return to Login</a> 
        
    </body>
</html>
