<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'new form submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitors_email.\n".
              "Subject: $visitors_email.\n".
              "User message: $message.\n";
$to = 'lacomas01@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitors_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>