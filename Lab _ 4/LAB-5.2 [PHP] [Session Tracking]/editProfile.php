<?php
session_start();
if(isset($_SESSION['flag'])){
?>


<html>
    <head>
        <title>Edit Profile</title>
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
                        <h3>Account</h3><hr>
                        <ul>
                            <li> <a href="dashboard.php">Dashboard</a></li>
                            <li> <a href="viewProfile.php">View Profile</a></li>
                            <li> <a href="editProfile.php">Edit Profile</a></li>
                            <li> <a href="changeProfilePicture.php">Change Profile Picture</a></li>
                            <li> <a href="changePassword.php">Change Password</a></li>
                            <li> <a href="logout.php">Logout</a></li>
                        </ul>

                    </td>
                    <td>
                            <form >
                                <fieldset>
                                    <legend> EDIT PROFILE </legend>
                                            <table>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td> :<input type="text" name="name" value=""/>   </td>
                                                    </tr>
                                                    <tr>
                                                            <td>Email</td>  
                                                            <td>:<input type="email" name="email" value=""/></td>               
                                                    </tr>
                                                    <tr>
                                                            <td>Gender</td>  
                                                            <td>:   <input type="radio" name="gender" value="Male"/> Male
                                                                    <input type="radio" name="gender" value="Female"/> Female
                                                                    <input type="radio" name="gender" value="Other"/> Other
                                                            </td> 
                                                    </tr>
                                                    <tr>
                                                            <td>Date Of Birth</td>  
                                                            <td>: <input type="date" name="dob" value=""/> </td> 
                                                    </tr>
                                            </table>
                                            <input type="submit" name="submit" value="Submit"/>
                                </fieldset>
                            </form>
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