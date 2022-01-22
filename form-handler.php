<?php
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info@harshp.com";
$email_subject = "Personal website form submission";
$email_body = "User Email: $visitor_email.\n".
              "User Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'harshpande5902@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject $email_body, $headers);
header("location: index.html");

 ?>
