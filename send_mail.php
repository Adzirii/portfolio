// I don't want to setup SMTP server, 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email address '$email' is valid.";
    } else {
        echo "Email address '$email' is not valid.";
    }

    $to = "liubov.nikita@gmail.com"; 
    $subject = "New message from Portfolio Contact Form";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";


    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>

