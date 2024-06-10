<?php
  // Set the recipient email address
  $to = 'pawarp@umich.edu';

  // Set the subject line
  $subject = 'Website Contact';

  // Get the form data
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create the email message
  $message_body = "Full Name: $fullname\n";
  $message_body.= "Email: $email\n";
  $message_body.= "Message: $message";

  // Set the headers
  $headers = "From: $email\r\n";
  $headers.= "Reply-To: $email\r\n";

  // Send the email
  mail($to, $subject, $message_body, $headers);

  // Redirect to a thank you page or display a success message
  header('Location: thank_you.html');
  exit;
?>