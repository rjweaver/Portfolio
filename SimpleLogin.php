<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/login.css" rel="stylesheet" type="text/css" /> 
        
        <title>Simple Login</title>
    
     <script language="JavaScript">
            
            function submit(form)
            {
                 form.submit();
            }
            
            
        </script>
    
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="wrapper"> 
            
            
        <div id="mainbox">
            <div id="boxtop">
                <h1>Log In</h1>
            </div>
        
        
        <form name="form1" method="post" action="checklogin.php">
            <table>
                <tr>
                    <td style="text-align: right;">User Name:</td>
                    <td><input type="textbox" id="txtbox" name="myusername"></input></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Password:</td>
                    <td><input type="password" id="txtbox" name="mypassword"></input></td>
                </tr>
               
            </table>
                <input type="checkbox" id="chkbox">Remember Me</input>
                </br>
<!--               <input type="submit" value="Login" id="login"></input>-->

            
              
            <div class="loginButton">
                <h2><a style="text-transform:capitalize" 
                       onClick="submit(this.form)">Log In</a></h2>
            </div>
            
         </form>
            
            </br> 
            
                
            
           
                    <h4>Register</h4> <h4>Forgot Password?</h4>
           
            
            <div id="boxbottom"></div>
        </div> <!-- End mainbox -->  
        
        <h4 style="text-align: center">Try using "test" for Username and Password!</h4>
        
        
        </div> <!--  end Wrapper -->
    </body>
</html>
