<?php 
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table height="500" width="700">
            <tr>
                <td>
                <fieldset>
                        <legend><h2>Login</h2></legend>
                    
                <form method="POST" action="loginCheck.php"> 
                              Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="checkbox" name="rememberme" value="rememberme"/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>

                            <a href="http://localhost/project/webTech_Project/registration.php">Registration</a>
                </form>
                </fieldset>
        </table>
    </center>
    </body>
</html>