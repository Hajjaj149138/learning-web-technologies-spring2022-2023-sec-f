<?php
session_start();
if(isset($_SESSION['flag'])){
?>


<html>
    <head>
        <title>Change Password</title>
    </head>

    <body>
        <center>
            <table border ="1" height="500" width="600">
                <tr height=70>

                    <td colspan="2"> 
                        <table width = "600">
                        <tr>
                            <td>
                                <img height="70" src="X_Company.png">
                            </td>
                            <td align="right">
                                Logged in as <a href="viewProfile.php"> <?php echo $_SESSION['username'] ?></a> |
                                <a href="logout.php">Logout</a>
                            </td>    
                        </tr>    
                    </table>
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <h3>Account</h3>
                        <hr>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="viewProfile.php">View Profile</a></li>
                            <li><a href="editProfile.php">Edit Profile</a></li>
                            <li><a href="changeProfilepicture.php">Change Profile Picture</a></li>
                            <li><a href="changePassword.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </td>
                    <td>
                        <fieldset>
                            <legend>CHANGE PASSWORD</legend>
                                <table>
                                        <tr>
                                            <td>Current Password</td>
                                            <td> :<input type="password" name="currentPassword" value=""/>   </td>        
                                        </tr>
                                        <tr>
                                            <td>New Password</td>
                                            <td> :<input type="password" name="newPassword" value=""/>   </td>               
                                        </tr>
                                        <tr>
                                            <td>Retype New Password</td>
                                            <td> :<input type="password" name="retypeNewPassword" value=""/>   </td>
                                        </tr>         
                                </table><hr>
                                    <input type="submit" name="submit" value="Submit"/>
                        </fieldset>
                    </td>
                </tr>
                <tr height ="40" >
                    <td colspan="2" align="center">Copyright © 2017</td>
                </tr>
            </table>
        </center>
    </body>
</html>


<?php
}
else{
    header('location: login.php'); 
}
?>