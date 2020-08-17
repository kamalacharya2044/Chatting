<?php
$to      = 'lotusacharya@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mail@jadeya.com' . "\r\n" .
    'Reply-To: mail@jadeya.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
