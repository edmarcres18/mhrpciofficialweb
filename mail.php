<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $subscribe = isset($_POST['news']) ? "Yes" : "No";

    // Set up email parameters
    $to = "mhrpciofficial@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission: $subject";
    $headers = "From: $name <$email>";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message\n\n";
    $email_message .= "Subscribe to Newsletter: $subscribe\n";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html"); // Replace with your thank you page
    exit;
}
?>
