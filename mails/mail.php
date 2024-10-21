<?php

$to = "rishibhalla07@warehouse.com";
$subject = "This is a test email";

$message = "This is a test email message using MailHog";

$headers = [
    'From' => 'rishibhalla07@gmail.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion(),
];

// $headers = 'From: webmaster@example.com' . "\r\n" .
//            'Reply-To: webmaster@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    print_r($to);
    echo "<br>";
    print_r($subject);
    echo "<br>";
    print_r($message);
    echo "<br>";
    print_r($headers);
    echo "<br>";
    echo "Email sent successfully";
} else {
    $error = mail($to, $subject, $message, $headers);
    print_r($error);
    echo "Email sending failed error: " . $error;
}
