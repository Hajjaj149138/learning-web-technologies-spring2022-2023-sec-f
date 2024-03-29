<?php
require_once '../../models/notificationModel.php';

$notificationObj = new Notification();
$notifications = $notificationObj->getNotifications();

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Notifications</title>
	<link rel="stylesheet" href="viewNotification.css">
</head>
<body>
	<fieldset>
		<legend>Notifications</legend>
            <div class="dashboard">
                <a href="../admindashboard.php">Dashboard</a>
                <a href="../vendordashboard.php">Dashboard</a>
                <a href="../customerdashboard.php">Dashboard</a>
                <a href="../deliverymandashboard.php">Dashboard</a>
            </div>
		<form action="../../controllers/viewNotificationHandler.php" method="post">
			<table>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
				</tr>
				<?php foreach($notifications as $notification): ?>
					<tr>
						<td><?php echo $notification['id']; ?></td>
						<td><?php echo $notification['title']; ?></td>
						<td><?php echo $notification['description']; ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</form>
	</fieldset>
</body>
</html>