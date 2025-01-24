<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email
    $to = "amankwafrifa12@gmail.com";

    // Set the subject of the email
    $subject = "Contact Form Message from $name";

    // Set the message body
    $body = "
    Name: $name\n
    Email: $email\n\n
    Message:\n$message
    ";

    // Set the headers
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "Content-Type: text/plain; charset=UTF-8";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for your message! We will get back to you soon.</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
}
