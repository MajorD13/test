<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $pestService = htmlspecialchars($_POST['pest_service']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "tim.discipline@ncsgrp.co.uk";
    $subject = "New Contact Form Submission";
    $message = "
    First Name: $firstName\n
    Last Name: $lastName\n
    Phone Number: $phone\n
    Email Address: $email\n
    Street Address: $address\n
    Pest Service Required: $pestService\n
    Additional Comments: $comments
    ";
    
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "There was a problem sending the email.";
    }
} else {
    echo "Invalid request.";
}
?>
