<!DOCTYPE html>
<html>
<head>
    <title>View Notifications</title>
</head>
<body>
    <fieldset>
        <legend><h1>View Notifications</h1></legend>
        <?php 
            $file = fopen("notifications.txt", "r") or die("Unable to open file.");
            while(!feof($file)) {
                $line = fgets($file);
                if(!empty($line)) {
                    echo "<p>" . $line . "</p>";
                }
            }
            fclose($file);
        ?>
    </fieldset>
</body>
</html>
