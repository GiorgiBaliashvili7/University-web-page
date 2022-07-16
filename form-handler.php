<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'giorgibaliashvili7@gmail.com'
$email_subject = 'New Form Submision'
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Subject: $subject.\n".
                        "User Message: $message.\n".;

$to = 'giorgi.baliashvili.1@btu.edu.ge'

$headers = "From: $email_from \r\n";

$headers .="Replay_to: $visitor_email \r\n";

mail($to,$email_subject, $email_body,$headers);
header("location: contact.html")

?>