<html>
<head>
	<title>Contact Us</title>
</head>
<body>
    <fieldset>
        <legend><b>Contact Us</b></legend>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name">Name:</label>
                        <input type="text" name="name" required><br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br>
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" required><br>
                        <label for="message">Message:</label>
                        <textarea name="message" required></textarea><br>
                        <input type="submit" value="Submit">
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $subject = $_POST["subject"];
                        $message = $_POST["message"];
                        
                        $file = fopen("contactMessages.txt", "a");
                        fwrite($file, "$name, $email, $subject, $message\n");
                        fclose($file);
                        
                        echo "Message sent successfully!";
                        }
                        ?>

    </fieldset>
</body>
</html>