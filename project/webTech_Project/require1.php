<?php
if (isset($_POST['submit'])) {

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

  $file = fopen("complaints.txt", "a");
  fwrite($file, "$name, $email, $subject, $message\n");
  fclose($file);

  echo "Your complain has been submitted. We will get back to you soon.";
}
?>
