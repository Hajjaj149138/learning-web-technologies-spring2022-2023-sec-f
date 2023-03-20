<?php
if (isset($_POST['submit'])) {
  // Validate customer's input
  $name = $_POST['name'];
  if (empty($name)) {
    $nameError = "Name is required";
  }

  $email = $_POST['email'];
  if (empty($email)) {
    $emailError = "Email is required";
  }

  $subject = $_POST['subject'];
  if (empty($subject)) {
    $subjectError = "Subject is required";
  }

  $message = $_POST['message'];
  if (empty($message)) {
    $messageError = "Message is required";
  }

  // Save the complain to a file
  $file = fopen("complaints.txt", "a");
  fwrite($file, "$name, $email, $subject, $message\n");
  fclose($file);

  echo "Your complain has been submitted. We will get back to you soon.";
  
}
?>

<html><body>
<a href="http://localhost/project/webTech_Project/customer.php">Dashboard</a>
</body></html>
