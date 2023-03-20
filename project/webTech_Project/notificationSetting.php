<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_notifications = isset($_POST['email_notifications']) ? "on" : "off";
    $file = fopen("settings.txt", "w");
    fwrite($file, $email_notifications);
    fclose($file);
}

$email_notifications = file_get_contents("settings.txt");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Notification Settings</title>
</head>
<body>
    <fieldset>
        <legend><h1>Notification Settings</h1></legend>
            <form method="POST">
                <b>Do you want to be notified by email?</b><br>
                <input type="checkbox" id="email_notifications" name="email_notifications" <?php echo ($email_notifications === "on") ? "checked" : ""; ?>>
                <label for="email_notifications">Yes</label><br><br>
                <button type="submit">Save Settings</button>
            </form>
    </fieldset>
</body>
</html>
