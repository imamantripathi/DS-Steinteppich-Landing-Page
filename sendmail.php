<?php
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate form data
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Compose email message
    $to = 'armin.erath@ds-steinteppich.de'; // Replace with your email address
    $subject = 'Neue Anfrage von der Website';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Ihre Nachricht wurde gesendet. Wir werden uns so schnell wie möglich bei Ihnen melden.";
    } else {
        echo "Beim Senden Ihrer Nachricht ist ein Problem aufgetreten. Bitte versuchen Sie es später erneut.";
    }
}
