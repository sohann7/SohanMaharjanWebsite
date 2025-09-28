<?php
if($_POST) {
  $to = "your@email.com";
  $subject = "New Contact Form Submission";
  $message = "Name: " . $_POST['name'] . "\n"
           . "Email: " . $_POST['email'] . "\n"
           . "Message: " . $_POST['message'];
  $headers = "From: no-reply@yourdomain.com";
  mail($to, $subject, $message, $headers);
  echo "Success";
}
?>
