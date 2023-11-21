<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up email
    $to = "ashok05621@gmail.com"; // Replace with the email where you want to receive messages
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Error: Unable to send the message.";
    }
} else {
    // If the request method is not POST, redirect to the form page
    header("Location: D:\WEB DEVELOPMENT\MY COMPLITED PROJECTS\ASHOK PORTFOLIO\public\index.html");
    exit;
}

?>
