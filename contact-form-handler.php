<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = '';
    $email_subject = "New From Submission";
    $email_body = "User Name: $name. \n".
                  "User Email: $visitor_email. \n".
                  "User Message: $message. \n";

    $to = "asyrafameran@gmail.com";
    $headers = "From: $email_from \r\n";
    $header .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>