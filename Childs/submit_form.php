<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'afouda.josue@gmail.com';
    $subject = 'New Hire Me Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'There was a problem sending your message.';
    }
} else {
    echo 'Invalid request method.';
}
?>
