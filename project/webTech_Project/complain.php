<html>
    <head>
	    <title>Complain</title>
    </head>
    <body>
        <fieldset>
            <legend>Complain</legend>
            <form method="post" action="complain1.php">
                <label for="name">Name     :</label>
                <input type="text" name="name" placeholder="Name"><br>
                <label for="email">Email      :</label>
                <input type="email" name="email" placeholder="Email"><br>
                <label for="order">Subject:</label>
                <input type="text" name="subject" placeholder="Subject"><br>
                <label for="complain">Complain:</label><br>
                <textarea name="message" placeholder="Message"></textarea><br>
                <br> <input type="submit" name="submit" value="Submit">
            </form>
        </fieldset>
    </body>
</html>