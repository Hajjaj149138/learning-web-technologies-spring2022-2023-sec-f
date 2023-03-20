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
            <legend><h1>Admin Panel</h1></legend>
            
                <h3>Notifications</h3>
                    <ul>
                        <li><a href="http://localhost/project/webTech_Project/createNotification.php">Create Notification</a></li>
                        <li><a href="http://localhost/project/webTech_Project/deleteNotification.php">Delete Notifications</a></li>
                        <li><a href="http://localhost/project/webTech_Project/viewNotification.php">View Notifications</a></li>
                        <li><a href="http://localhost/project/webTech_Project/notificationSetting.php">Notification Setting</a></li>
                    </ul>
            
            <h3>Report Generate</h3>
                <ul>
                    <li><a href="http://localhost/project/webTech_Project/financial.php">Financial Report </a></li>
                    <li><a href="http://localhost/project/webTech_Project/inventory.php">Inventory Report</a></li>
                    <li><a href="http://localhost/project/webTech_Project/userReport.php">User Report</a></li>
                    <li><a href="http://localhost/project/webTech_Project/salesOrderReport.php">Sales & Order Report</a></li>
                </ul>

            <h3>History</h3>
                    <ul>
                        <li><a href="http://localhost/project/webTech_Project/orderHistory.php">Order History</a></li>
                        <li><a href="http://localhost/project/webTech_Project/transactionHistory.php">Transaction History</a></li>
                    </ul>

            <h3>Review & Ratings</h3>
                <ul>
                    <li><a href="http://localhost/project/webTech_Project/viewReviewRating.php">View Review & Ratings</a></li>
                </ul>

            <h3>Help & Support</h3>
                <ul>
                    <li><a href="http://localhost/project/webTech_Project/viewComplain.php">View Complain</a></li>
                    <li><a href="http://localhost/project/webTech_Project/viewContactus.php">View Contact US Feedback</a></li>
                </ul>

                <hr>
                <button><a href="http://localhost/project/webTech_Project/logout.php"><h3>Logout</h3></a></button>
        </fieldset>
    </body>
</html>