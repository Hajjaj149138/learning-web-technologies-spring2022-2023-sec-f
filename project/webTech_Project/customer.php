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
            <legend><h1>Customer Panel</h1></legend>

        <h3>Notifications</h3>
            <ul>
                <li><a href="http://localhost/project/webTech_Project/viewNotification.php">Notifications</a></li>
                <li><a href="http://localhost/project/webTech_Project/notificationSetting.php">Settings</a></li>
            </ul>
            
            <h3>Review & Ratings</h3>
            <li><a href="http://localhost/project/webTech_Project/reviewRating.php">Review & Ratings</a></li>


        <h3>Help & Support</h3>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="complain.php">Complain</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                </ul>

        <h3>History</h3>
                <ul>
                    <li><a href="transactionHistory.php">Transaction History</a></li>
                </ul>
                <hr>
                <button><a href="http://localhost/project/webTech_Project/logout.php"><h3>Logout</h3></a></button>
        </fieldset>
    </body>
</html>