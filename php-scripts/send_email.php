<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'send_email') {
  $errors = array();

  if (empty($_POST['fullname'])) {
    $errors[] = 'Full name is empty';
  }

  if (empty($_POST['email'])) {
    $errors[] = 'Email is empty';
  }

  if (empty($_POST['message'])) {
    $errors[] = 'Message is empty';
  }

  if (!empty($errors)) {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  } else {
    $name = $_POST['fullname'];
    $senderEmail = $_POST['email'];
    $message = $_POST['message'];

    $to = 'pawarp@umich.edu';
    $subject = 'Website Contact';
    $email_message = "Name: $name\nEmail: $senderEmail\nMessage: $message";

    $headers = "From: $senderEmail\r\n";
    mail($to, $subject, $email_message, $headers);

    echo "Email sent successfully!";
  }
}
?>