<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "2110348@reva.edu.in";

    // Set the email subject
    $subject = "Message from Contact Form";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message: $message\n";

    // Send email
    mail($to, $subject, $email_message);

    // Redirect back to the contact page after sending the email
    header("Location: contact.html");
    exit;
}
?>
