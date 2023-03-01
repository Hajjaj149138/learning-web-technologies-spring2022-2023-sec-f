<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table border ="1" height="500" width="600">
            <tr height=70>
                <td >
                     <table width = "600">
                        <tr>
                            <td>
                                <img height="70" src="X_Company.png">
                            </td>
                            <td align="right">
                                <a href="publicHome.php">Home</a>  
                                <a href="login.php">| Login</a>   
                                <a href="registration.php">| Registration</a>  
                            </td>    
                        </tr>    
                    </table>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table width="300" height="100">
                            <tr>
                                <td>
                                    <form method="POST" action="loginCheck.php"  >
                                        <fieldset>
                                            <legend>LOGIN</legend>
                                                Username : <input type="text" name="username" value=""/> <br>
                                                Password : <input type="password" name="password" value=""/> <br> <hr>
                                                <input type="radio" name="rememberme" value=""/> Remember Me <br/><br>
                                                <input type="submit" name="submit" value="Submit"/>
                                                <a href="forgotPassword.php">Forgot Password?</a>  
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
            <tr height =40>
                <td align="center">Copyright © 2017</td>
            </tr>
        </table>
    </center>
    </body>

</html>