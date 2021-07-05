<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_subject = $_POST['subject'];
$visitor_message = $_POST['message'];

$email_from = 'website@gmail.com';
$email_subject = "New Form Submission from  $name";
$email_body = "User Name : $name.\n"
                "User Email : $visitor_email.\n".
                "Subject : $visitor_subject.\n".
                "User Message : $visitor_message.\n";

$to = 'shootoutofallahabad@gmail.com';
$headers = "From $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.htm");






?>