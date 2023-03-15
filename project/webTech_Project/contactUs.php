<html>
<head>
	<title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>

            <input type="submit" value="Submit">
        </form>	
</body>
</html>