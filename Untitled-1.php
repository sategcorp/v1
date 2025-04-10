<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email to send to
    $to = "info@sategcorp.com";
    
    // Subject of the email
    $subject = "New Message from SATEG Contact Form";
    
    // Email body content
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    // Headers for the email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page or show success message
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        // Show an error message if email failed to send
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
