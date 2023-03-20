<html>
    <body>
    <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  <?php
  $file = fopen("contactMessages.txt", "r");
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


    </body>
</html>