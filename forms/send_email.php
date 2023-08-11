<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "ridhishahede2903@gmail.com";  // Replace with your email address
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "From: $name <$email>" . "\r\n";
    
    if (mail($recipient, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
