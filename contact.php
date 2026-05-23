<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yourmail@gmail.com";
    $subject = "Portfolio Contact Message";

    $body = "
    Name: $name

    Email: $email

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Message Sent Successfully";
    } else {
        echo "Message Failed";
    }

}

?>
