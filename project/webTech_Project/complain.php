<html>
    <head>
	    <title>Complain</title>
    </head>
    <body>
        <fieldset>
            <legend>Complain</legend>
            <form action="submit.php" method="POST">
                <label for="name">Name     :</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email      :</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="order">Order Number:</label>
                <input type="text" id="order" name="order" required><br><br>
                <label for="complain">Complain:</label><br>
                <textarea id="complain" name="complain" rows="5" required></textarea>
                <br> <input type="submit" value="Submit">
            </form>
        </fieldset>
    </body>
</html>