<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    if(empty($message)) {
        $_SESSION['error_message'] = "Please enter a notification message.";
        header("Location: createNotification.php");
        exit();
    }
    $file = fopen("notifications.txt", "a") or die("Unable to open file.");
    $date = date("Y-m-d H:i:s");
    $data = $date . " | " . $message . "\n";
    fwrite($file, $data);
    fclose($file);
    $_SESSION['success_message'] = "Notification created successfully.";
    header("Location: createNotification.php");
    exit();
}
?>

<html>
<head>
    <title>Create Notification</title>
</head>
<body>
    <fieldset>
        <legend><h1>Create Notification</h1></legend>

            <?php if (isset($_SESSION['error_message'])): ?>
            <p><?php echo $_SESSION['error_message']; ?></p>
            <?php unset($_SESSION['error_message']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['success_message'])): ?>
            <p><?php echo $_SESSION['success_message']; ?></p>
            <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>
            <form method="POST">
                <label for="message">Notification Message:</label><br>
                <textarea id="message" name="message" placeholder="Write here........"></textarea><br>
                <button type="submit"><b>Create Notification</b></button>
            </form>
            
    </fieldset>
</body>
</html>
