<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["firstName"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $phone = strip_tags(trim($_POST["phone"]));
    $phone = str_replace(array("\r", "\n"), array(" ", " "), $phone);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Set the recipient email address
    $to = "armin.erath@ds-steinteppich.de";

    // Set the email subject
    $subject = "Neue Kontaktformulareinreichung";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // If the email is sent successfully, redirect to a thank you page
        header("Location: thankyou.html");
        exit;
    } else {
        // If the email fails to send, show an error message
        echo "Hoppla! Etwas lief schief und wir konnten Ihre Nachricht nicht senden.";
    }
}

?>