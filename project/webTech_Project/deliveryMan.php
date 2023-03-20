<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <body>
        <fieldset>
            <legend><h1>DeliveryMan Panel</h1></legend>
            
                <h3>Notifications</h3>
                    <ul>
                        <li><a href="http://localhost/project/webTech_Project/viewNotification.php">View Notifications</a></li>
                        <li><a href="http://localhost/project/webTech_Project/notificationSetting.php">Notification Setting</a></li>
                    </ul>
                
                <hr>
                <button><a href="http://localhost/project/webTech_Project/logout.php"><h3>Logout</h3></a></button>
        </fieldset>
    </body>
</html>