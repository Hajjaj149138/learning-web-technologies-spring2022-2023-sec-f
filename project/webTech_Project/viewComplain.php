<html>
    <body>
        <fieldset>
            <legend><b>View Complains</b></legend>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Complain</th>
                    </tr>
                    <?php
                    $file = fopen("complaints.txt", "r");
                    while (!feof($file)) {
                        $line = fgets($file);
                        if (!empty(trim($line))) {
                        list($name, $email, $subject, $message) = explode(",", $line);
                        echo "<tr>";
                        echo "<td><b>$name</b>|||</td>";
                        echo "<td>$email|||</td>";
                        echo "<td>$subject|||</td>";
                        echo "<td>$message</td>";
                        echo "</tr>";
                        }
                    }
                    fclose($file);
                    ?>
                </table>
        </fieldset>
    </body>
</html>