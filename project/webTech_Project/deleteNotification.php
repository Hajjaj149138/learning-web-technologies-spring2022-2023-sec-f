<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $line_number = $_POST['line_number'];
    $file = file("notifications.txt");
    unset($file[$line_number]);
    file_put_contents("notifications.txt", implode("", $file));
    $_SESSION['success_message'] = "Notification deleted successfully.";
    header("Location: deleteNotification.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Notification</title>
</head>
<body>
    <fieldset>
        <legend><h1>Delete Notification</h1></legend>
            <?php if (isset($_SESSION['success_message'])): ?>
                <p><?php echo $_SESSION['success_message']; ?></p>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>
            <form method="POST">
                <label for="line_number">Select Notification to Delete:</label>
                <select id="line_number" name="line_number">
                    <?php 
                        $file = fopen("notifications.txt", "r") or die("Unable to open file.");
                        $line_number = 0;
                        while(!feof($file)) {
                            $line = fgets($file);
                            if(!empty($line)) {
                                echo "<option value='" . $line_number . "'>" . $line . "</option>";
                                $line_number++;
                            }
                        }
                        fclose($file);
                    ?>
                </select><br>
                <button type="submit">Delete Notification</button>
                <a href="admin.php">Back</a>
            </form>
    </fieldset>
    </form>
</body>
</html>
